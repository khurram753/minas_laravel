<?php


namespace App\Services\Admin;


use App\Category;
use App\Helpers\ImageUploadHelper;
use Illuminate\Support\Facades\DB;
use File;

class CategoryService
{
    public function index()
    {
        $data  = Category::all();
        return view('admin.category.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = Category::create($request->except('_token'));

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
        $data =  Category::find($id);

        if($data)
        {
            return view('admin.category.edit',compact('data'));
        }
        else{
            return redirect()->route('categoryListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = Category::find($request->id);


        if($data) {
            DB::beginTransaction();


            try {
                $save = $data->update($request->except('_token'));

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
        $data = Category::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Category Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
