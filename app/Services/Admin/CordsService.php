<?php


namespace App\Services\Admin;


use App\Cord;
use App\Helpers\ImageUploadHelper;
use Illuminate\Support\Facades\DB;
use File;

class CordsService
{
    public function index()
    {
        $data  = Cord::all();
        return view('admin.cord.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.cord.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = Cord::create($request->except('_token'));

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
        $data =  Cord::find($id);

        if($data)
        {
            return view('admin.cord.edit',compact('data'));
        }
        else{
            return redirect()->route('cordListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = Cord::find($request->id);


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
        $data = Cord::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Cord Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
