<?php

namespace App\Services\Site;

use App\Collection;

class MainService
{
    public function index()
    {
        return view('site.main.main');
    }

    public function getCollection()
    {
        $data = Collection::all();

        return response()->json(['result'=>'success','data'=>$data]);
    }
}
