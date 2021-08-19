<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MaterialRequest;
use App\Services\Admin\MaterialService;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(MaterialService $materialService)
    {
        return $materialService->index();
    }

    public function create (MaterialService $materialService)
    {
        return $materialService->create();
    }

    public function save(MaterialRequest $request,MaterialService $materialService)
    {
        return $materialService->save($request);
    }

    public function edit($id,MaterialService $materialService)
    {
        return $materialService->edit($id);
    }

    public function update(MaterialRequest $request,MaterialService $materialService)
    {
        return $materialService->update($request);
    }

    public function delete(Request $request,MaterialService $materialService)
    {
        return $materialService->delete($request);
    }
}
