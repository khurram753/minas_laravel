<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactUsRequest;
use App\Services\Admin\ContactUsService;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(ContactUsService $contactUsService)
    {
        return $contactUsService->index();
    }

    public function create (ContactUsService $contactUsService)
    {
        return $contactUsService->create();
    }

    public function save(ContactUsRequest $request,ContactUsService $contactUsService)
    {
        return $contactUsService->save($request);
    }

    public function edit($id,ContactUsService $contactUsService)
    {
        return $contactUsService->edit($id);
    }

    public function update(ContactUsRequest $request,ContactUsService $contactUsService)
    {
        return $contactUsService->update($request);
    }

    public function delete(Request $request,ContactUsService $contactUsService)
    {
        return $contactUsService->delete($request);
    }
}
