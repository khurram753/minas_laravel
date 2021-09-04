<?php

namespace App\Services\Site;

use App\CMS;
use App\Heritage;
use App\News;
use App\Product;
use App\Project;

class AboutService
{
    public function index()
    {
        $data = CMS::where('page_name','about_us')->first();

        return view('site.about.about',compact('data'));
    }
}
