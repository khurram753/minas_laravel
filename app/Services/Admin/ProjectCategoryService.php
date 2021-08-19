<?php

namespace App\Services\Admin;

use App\ProjectCategory;
use Illuminate\Support\Facades\DB;

class ProjectCategoryService
{
    public function index()
    {
        $data = ProjectCategory::all();
        return view('admin.project_category.listing', compact('data'));
    }

    public function create()
    {
        return view('admin.project_category.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try {
            ProjectCategory::create($request->except('_token'));
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Error in Saving Record' . $e]);
        }

        DB::commit();
        return response()->json(['result'=>'success','message'=>'Record Save Successfully']);
    }

    public function edit($id)
    {
        $data = ProjectCategory::find($id);
        if($data)
        {
            return view('admin.project_category.edit',compact('data'));
        }
        else{
            return redirect()->route('projectCategoryListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        DB::beginTransaction();

        $data = ProjectCategory::find($request->id);
        if($data)
        {

            try{
                $data->update($request->except('_token'));
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
        $data = ProjectCategory::find($request->id);
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
