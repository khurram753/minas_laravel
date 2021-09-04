<?php

namespace App\Services\Site;

use App\Heritage;

class HeritageService
{
    public function index()
    {
        $data = Heritage::orderBy('year','asc')->get();

        return view('site.heritage.heritage',compact('data'));
    }

    public function show($request)
    {
        $data = Heritage::find($request->id);
        if($data)
        {
            return response()->json(['result'=>'success','message'=>'Record Found','data'=>$data]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function detail($id)
    {
        $data = Heritage::find($id);
        if($data)
        {
            $previousURL = Heritage::where('year','<=',$data->year)->where('id','!=',$data->id)->first();
            $nextURL = Heritage::where('year','>=',$data->year)->where('id','!=',$data->id)->first();

            return view('site.heritage.detail',compact('data','previousURL','nextURL'));


        }
        else{
            return redirect()>back()->with('error','Record Not Found');
        }
    }
}
