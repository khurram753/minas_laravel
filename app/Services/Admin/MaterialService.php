<?php


namespace App\Services\Admin;


use App\Material;
use Illuminate\Support\Facades\DB;

class MaterialService
{
    public function index()
    {
        $data  = Material::all();
        return view('admin.material.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.material.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = Material::create($request->except('_token'));

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
        $data =  Material::find($id);

        if($data)
        {
            return view('admin.material.edit',compact('data'));
        }
        else{
            return redirect()->route('cordListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = Material::find($request->id);


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
        $data = Material::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Material Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
