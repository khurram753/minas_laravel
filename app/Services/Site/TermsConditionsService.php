<?php

namespace App\Services\Site;

use App\CMS;

class TermsConditionsService
{
    public function index()
    {
        $data = CMS::where('page_name','terms_conditions')->first();
        return view('site.terms_conditions.terms',compact('data'));
    }
}
