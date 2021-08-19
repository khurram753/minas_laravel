<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CMSRequest;
use App\Http\Requests\Admin\QualityRequest;
use App\Services\Admin\CMSService;
use Illuminate\Http\Request;

class CMSController extends Controller
{

    public function editAboutUs(CMSService $service)
    {
        return $service->edit();
    }

    public function updateAboutUs (CMSRequest $request,CMSService $service)
    {
        return $service->update($request);
    }

    public function editQualityCraftsmanship(CMSService $service)
    {
        return $service->editQualityCraftsmanship();
    }

    public function updateQualityCraftsmanship(QualityRequest $request,CMSService $service)
    {
        return $service->updateQualityCraftsmanship($request);
    }

    public function deleteProcess(Request $request,CMSService $service)
    {
        return $service->deleteProcess($request);
    }



}
