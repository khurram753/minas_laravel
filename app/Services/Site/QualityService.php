<?php

namespace App\Services\Site;

use App\QualityCraftsmanship;

class QualityService
{
    public function index()
    {
        $data = QualityCraftsmanship::first();

        $average = 100/sizeof($data->orderedProcess);
        $calculateOverall = $average *  1 ;
        $percentage = 2 * pi() * 54 * (1 - $calculateOverall / 100);


        return view('site.quality.quality',compact('data','percentage'));
    }
}
