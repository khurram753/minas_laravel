<?php


namespace App\Services\Admin;


use App\Category;
use App\Collection;
use App\Helpers\ImageUploadHelper;
use Illuminate\Support\Facades\DB;
use File;

class PressService
{
    public function index()
    {
        $data  = Collection::all();
        return view('admin.press_categories.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.press_categories.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = Collection::create($request->except('_token'));

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
        $data =  Collection::find($id);

        if($data)
        {
            return view('admin.press_categories.edit',compact('data'));
        }
        else{
            return redirect()->route('categoryListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = Collection::find($request->id);


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
        $data = Collection::find($request->id);
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
