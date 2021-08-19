<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeritageRequest;
use App\Services\Admin\HeritageService;
use Illuminate\Http\Request;

class HeritageController extends Controller
{
    public function index(HeritageService $heritageService)
    {
        return $heritageService->index();
    }

    public function create(HeritageService $heritageService)
    {
        return $heritageService->create();
    }

    public function save(HeritageRequest $request,HeritageService $heritageService)
    {
        return $heritageService->save($request);
    }

    public function edit($id,HeritageService $heritageService)
    {
        return $heritageService->edit($id);
    }

    public function update(HeritageRequest $request,HeritageService $heritageService)
    {
        return $heritageService->update($request);
    }

    public function delete(Request $request,HeritageService $heritageService)
    {
        return $heritageService->delete($request);
    }
}
