<?php

namespace App\Services\Admin;

use App\Helpers\ImageUploadHelper;
use App\Heritage;
use Illuminate\Support\Facades\DB;
use File;

class HeritageService
{
    public function index()
    {
        $data = Heritage::all();
        return view('admin.heritage.listing', compact('data'));
    }

    public function create()
    {
        return view('admin.heritage.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        $save_image = null;
        if ($request->has('image')) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            $fileNameUpload = time() . "-." . $ext;
            $path = public_path('site/heritage/images/');
            if (!file_exists($path)) {
                File::makeDirectory($path, 0777, true);
            }

            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/heritage/images/');
            $save_image = $imageSave;
        }

        try {
            Heritage::create($request->except('_token','image')+['image'=>$save_image]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Error in Saving Record' . $e]);
        }

        DB::commit();
        return response()->json(['result'=>'success','message'=>'Record Save Successfully']);
    }

    public function edit($id)
    {
        $data = Heritage::find($id);
        if($data)
        {
            return view('admin.heritage.edit',compact('data'));
        }
        else{
            return redirect()->route('heritageListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        DB::beginTransaction();

        $data = Heritage::find($request->id);
        if($data)
        {
            $save_image = $data->image;
            if ($request->has('image')) {
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." . $ext;
                $path = public_path('site/heritage/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/heritage/images/');
                $save_image = $imageSave;
            }

            try{
                $data->update($request->except('_token','image')+['image'=>$save_image]);
            }
            catch (\Exception $e)
            {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Error in Saving Record' . $e]);
            }
            DB::commit();
            return response()->json(['result'=>'success','message'=>'Record Updated Successfully']);
        }
        else{
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);

        }

    }

    public function delete($request)
    {
        $data = Heritage::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result' => 'success', 'message' => 'Record Deleted']);

        }
        else{
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);

        }
    }

}
