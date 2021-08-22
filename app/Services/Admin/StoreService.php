<?php


namespace App\Services\Admin;


use App\Category;
use App\ContactUs;
use App\Helpers\ImageUploadHelper;
use App\StoreDescription;
use App\StoreImage;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use File;

class StoreService
{
    public function index()
    {
        $data  = StoreDescription::all();
        return view('admin.store.listing',compact('data'));
    }

    public function create()
    {
        $contactUsListing =  ContactUs::all();
        return view('admin.store.create',compact('contactUsListing'));
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{

            $save_image = null;
            if ($request->has('rotate_image')) {
                $image = $request->rotate_image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." . $ext;
                $path = public_path('site/store/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/store/images/');
                $save_image = $imageSave;
            }


            $save = StoreDescription::create($request->except('_token','rotate_image')+['rotate_image'=>$save_image]);

            DB::commit();
            return response()->json(['result'=>'success','message'=>'Record Save']);

        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['result'=>'error','message'=>'Unable to Save Record: '.$e]);
        }
    }

    public function edit($id)
    {
        $data =  StoreDescription::find($id);

        if($data)
        {
            $contactUsListing =  ContactUs::all();

            return view('admin.store.edit',compact('data','contactUsListing'));
        }
        else{
            return redirect()->route('contactUsListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = StoreDescription::find($request->id);


        if($data) {
            DB::beginTransaction();

            try {
                $save_image = $data->rotate_image;
                if ($request->has('rotate_image')) {
                    $image = $request->rotate_image;
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $image->getClientOriginalName();
                    $fileNameUpload = time() . "-." . $ext;
                    $path = public_path('site/store/images/');
                    if (!file_exists($path)) {
                        File::makeDirectory($path, 0777, true);
                    }

                    $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/store/images/');
                    $save_image = $imageSave;
                }

                $save = $data->update($request->except('_token','rotate_image','process')+['rotate_image'=>$save_image]);



            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }

            try{
                if(sizeof($request->process) > 0) {
                    foreach ($request->process as $key => $singleProcess) {

                        if (isset($singleProcess['id'])) {
                            $findProcess = StoreImage::find($singleProcess['id']);
                            $save_image = $findProcess->image;
                        } else {
                            $findProcess = new StoreImage();
                        }

                        if (isset($singleProcess['image'])) {
                            $image = $singleProcess['image'];
                            $ext = $image->getClientOriginalExtension();
                            $fileName = $image->getClientOriginalName();
                            $fileNameUpload = time() . "-" . $key . "." . $ext;
                            $path = public_path('site/store/images/');
                            if (!file_exists($path)) {
                                File::makeDirectory($path, 0777, true);
                            }

                            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/store/images/');
                            $save_image = $imageSave;
                        }

                        $findProcess->description = $singleProcess['description'];
                        $findProcess->title = $singleProcess['title'];
                        $findProcess->date = $singleProcess['date'];
                        $findProcess->store_id = $request->id;
                        $findProcess->image = $save_image;

                        $findProcess->save();

                    }
                }
            }
            catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Error in saving store image: ' . $e]);
            }


            DB::commit();
            return response()->json(['result' => 'success', 'message' => 'Record Updated']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function delete($request)
    {
        $data = StoreDescription::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Record Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function deleteStoreImage($request)
    {
        $data = StoreImage::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Record Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


}
