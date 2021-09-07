<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
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
}
