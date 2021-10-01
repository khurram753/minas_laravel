<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\FAQService;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    //
    public function faq(Request $request,FAQService $service)
    {
        return $service->faq($request);
    }
}
