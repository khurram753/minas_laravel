<?php


namespace App\Services\Admin;


use App\Category;
use App\Helpers\ImageUploadHelper;
use App\ProductCollection;
use Illuminate\Support\Facades\DB;
use File;

class CollectionService
{
    public function index()
    {
        $data  = ProductCollection::all();
        return view('admin.collection.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.collection.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        $save_image = null;

        if ($request->has('image')) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            $fileNameUpload = time() . "-." .$ext;
            $path = public_path('site/collection/images/');
            if (!file_exists($path)) {
                File::makeDirectory($path, 0777, true);
            }

            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/collection/images/');
            $save_image = $imageSave;
        }

        try{
            $save = ProductCollection::create($request->except('_token','image')+['image'=>$save_image]);

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
        $data =  ProductCollection::find($id);

        if($data)
        {
            return view('admin.collection.edit',compact('data'));
        }
        else{
            return redirect()->route('collectionListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = ProductCollection::find($request->id);


        if($data) {
            DB::beginTransaction();


            $save_image = $data->image;

            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." .$ext;
                $path = public_path('site/collection/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/collection/images/');
                $save_image = $imageSave;
            }


            try {
                $save = $data->update($request->except('_token','image')+['image'=>$save_image]);

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function delete($request)
    {
        $data = ProductCollection::find($request->id);
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
