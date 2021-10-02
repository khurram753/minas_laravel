<?php

namespace App\Services\Site;

use App\Collection;
use App\MainPageContent;

class MainService
{
    public function index()
    {
        $data = MainPageContent::first();
        return view('site.main.main',compact('data'));
    }

    public function getCollection()
    {
        $data = Collection::all();

        return response()->json(['result'=>'success','data'=>$data]);
    }
}
