<?php

namespace App\Services\Site;

use App\CMS;

class PrivacyPolicyService
{
    public function index()
    {
        $data = CMS::where('page_name','privacy_policy')->first();
        return view('site.privacy_policy.policy',compact('data'));
    }
}
