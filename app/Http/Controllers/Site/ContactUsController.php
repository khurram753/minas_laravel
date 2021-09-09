<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Services\Site\ContactUsService;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(ContactUsService $contactUsService)
    {
        return $contactUsService->index();
    }

    public function storeDetail($id,ContactUsService $contactUsService)
    {
        return $contactUsService->storeDetail($id);
    }

    public function contactUsRequest(ContactUsRequest $request,ContactUsService $contactUsService)
    {
        return $contactUsService->contactUsRequest($request);
    }
}
