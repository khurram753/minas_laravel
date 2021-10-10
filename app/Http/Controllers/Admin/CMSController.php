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


    public function editMainPage(CMSService $service)
    {
        return $service->editMainPage();
    }

    public function updateMainPage (Request $request,CMSService $service)
    {
        $this->validate($request,[
            'first_text' => 'required',
            'second_text' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        return $service->updateMainPage($request);
    }

    public function editBanner(CMSService $service)
    {
        return $service->editBanner();
    }

    public function updateBanner (CMSRequest $request,CMSService $service)
    {
        return $service->updateBanner($request);
    }

    public function editFooter(CMSService $service)
    {
        return $service->editFooter();
    }

    public function updateFooter (Request $request,CMSService $service)
    {
        return $service->updateFooter($request);
    }


    public function editHeritage(CMSService $service)
    {
        return $service->editHeritage();
    }

    public function updateHeritage (CMSRequest $request,CMSService $service)
    {
        return $service->updateHeritage($request);
    }

    public function editPolicy(CMSService $service)
    {
        return $service->editPolicy();
    }

    public function updatePolicy (Request $request,CMSService $service)
    {
        return $service->updatePolicy($request);
    }

    public function editTerms(CMSService $service)
    {
        return $service->editTerms();
    }

    public function updateTerms (Request $request,CMSService $service)
    {
        return $service->updateTerms($request);
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


    public function editShop(CMSService $service)
    {
        return $service->editShop();
    }

    public function updateShop (Request $request,CMSService $service)
    {
        return $service->updateShop($request);
    }


}
