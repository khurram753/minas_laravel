<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\PrivacyPolicyService;
use App\Services\Site\TermsConditionsService;
use Illuminate\Http\Request;

class TermsConditionsController extends Controller
{
    public function index(TermsConditionsService $termsConditionsService)
    {
        return $termsConditionsService->index();
    }
}
