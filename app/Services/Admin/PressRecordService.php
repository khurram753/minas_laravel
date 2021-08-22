<?php


namespace App\Services\Admin;


use App\Category;
use App\Collection;
use App\Helpers\ImageUploadHelper;
use App\PressTypeProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use File;

class PressRecordService
{
    public function index()
    {
        $data  = PressTypeProduct::all();
        return view('admin.press_record.listing',compact('data'));
    }

    public function create()
    {
        $collections =  Collection::all();
        return view('admin.press_record.create',compact('collections'));
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{

            $save_image = null;
            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." . $ext;
                $path = public_path('site/media-kit/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/media-kit/images/');
                $save_image = $imageSave;
            }

            $saveFile = null;
            if ($request->has('file')) {
                $image = $request->file;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-123." . $ext;
                $path = public_path('site/media-kit/files/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $fileSave = ImageUploadHelper::uploadFile('site/media-kit/files/',$image, $fileNameUpload );
                $saveFile = $fileSave;
            }


            $save = PressTypeProduct::create($request->except('_token','image','file','date')+
                ['image'=>$save_image, 'file'=>$saveFile,
                    'date'=>Carbon::parse($request->date)->format('Y-m-d')
                ]);

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
        $data =  PressTypeProduct::find($id);

        if($data)
        {
            $collections = Collection::all();
            return view('admin.press_record.edit',compact('data','collections'));
        }
        else{
            return redirect()->route('pressRecordListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = PressTypeProduct::find($request->id);


        if($data) {
            DB::beginTransaction();


            try {
                $save_image = $data->image;
                if ($request->has('image')) {
                    $image = $request->image;
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $image->getClientOriginalName();
                    $fileNameUpload = time() . "-." . $ext;
                    $path = public_path('site/media-kit/images/');
                    if (!file_exists($path)) {
                        File::makeDirectory($path, 0777, true);
                    }

                    $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/media-kit/images/');
                    $save_image = $imageSave;
                }

                $saveFile = $data->file;
                if ($request->has('file')) {
                    $image = $request->file;
                    $ext = $image->getClientOriginalExtension();
                    $fileName = $image->getClientOriginalName();
                    $fileNameUpload = time() . "-123." . $ext;
                    $path = public_path('site/media-kit/files/');
                    if (!file_exists($path)) {
                        File::makeDirectory($path, 0777, true);
                    }

                    $fileSave = ImageUploadHelper::uploadFile('site/media-kit/files/',$image, $fileNameUpload );
                    $saveFile = $fileSave;
                }


                $save = $data->update($request->except('_token','image','file','date')+
                    ['image'=>$save_image, 'file'=>$saveFile,
                        'date'=>Carbon::parse($request->date)->format('Y-m-d')
                    ]);

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
        $data = PressTypeProduct::find($request->id);
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
