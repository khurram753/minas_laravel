<?php

namespace App\Services\Admin;

use App\Helpers\ImageUploadHelper;
use App\Heritage;
use App\Project;
use App\ProjectCategory;
use App\ProjectImage;
use Illuminate\Support\Facades\DB;
use File;

class ProjectService
{
    public function index()
    {
        $data = Project::all();
        return view('admin.project.listing', compact('data'));
    }

    public function create()
    {
        $categories = ProjectCategory::all();
        return view('admin.project.create',compact('categories'));
    }

    public function save($request)
    {
        DB::beginTransaction();

        $save_image = null;
        if ($request->has('featured_image')) {
            $image = $request->featured_image;
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            $fileNameUpload = time() . "-." . $ext;
            $path = public_path('site/project/images/');
            if (!file_exists($path)) {
                File::makeDirectory($path, 0777, true);
            }

            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/project/images/');
            $save_image = $imageSave;
        }

        try {
            Project::create($request->except('_token','featured_image')+['featured_image'=>$save_image]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Error in Saving Record' . $e]);
        }

        DB::commit();
        return response()->json(['result'=>'success','message'=>'Record Save Successfully']);
    }

    public function edit($id)
    {
        $data = Project::find($id);

        if($data)
        {
            $categories = ProjectCategory::all();
            return view('admin.project.edit',compact('data','categories'));
        }
        else{
            return redirect()->route('projectListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        DB::beginTransaction();

        $data = Project::find($request->id);
        if($data)
        {
            $save_image = $data->featured_image;
            if ($request->has('featured_image')) {
                $image = $request->featured_image;
                $ext = $image->getClientOriginalExtension();
                $fileName = $image->getClientOriginalName();
                $fileNameUpload = time() . "-." . $ext;
                $path = public_path('site/project/images/');
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true);
                }

                $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/project/images/');
                $save_image = $imageSave;
            }

            try{
                $data->update($request->except('_token','featured_image')+['featured_image'=>$save_image]);
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
        $data = Project::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result' => 'success', 'message' => 'Record Deleted']);

        }
        else{
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);

        }
    }

    public function saveGallery($request)
    {
        if ($request->has('image')) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $fileName = $image->getClientOriginalName();
            $fileNameUpload = time() . "-" . $fileName;
            $path = public_path('site/project/images/');
            if (!file_exists($path)) {
                File::makeDirectory($path, 0777, true);
            }

            $imageSave = ImageUploadHelper::saveImage($image, $fileNameUpload, 'site/project/images/');
            $save_image = $imageSave;
        }

        DB::beginTransaction();

        try{
            $save = ProjectImage::create(['project_id'=>$request->project_id,'images'=>$save_image]);
        }
        catch (Exception $e)
        {
            DB::rollBack();
            return response()->json(['result'=>'error','message'=>'Error in Saving Image: '.$e]);
        }

        DB::commit();
        return response()->json(['result'=>'success','message'=>'Image Saved','data'=>$save]);
    }

    public function deleteGallery($request)
    {
        $data = ProjectImage::find($request->id);
        if($data)
        {
            DB::beginTransaction();
            try{
                $data->delete();
            }
            catch(Exception $e)
            {
                DB::rollBack();
                return response()->json(['result'=>'error','message'=>'Error In Delete Image: '.$e]);
            }
            DB::commit();
            return response()->json(['result'=>'success','message'=>'Image Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
