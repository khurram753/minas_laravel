<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PressRequest;
use App\Services\Admin\PressService;
use Illuminate\Http\Request;

class PressController extends Controller
{
    public function index(PressService $pressService)
    {
        return $pressService->index();
    }

    public function create(PressService $pressService)
    {
        return $pressService->create();
    }

    public function save(PressRequest $request,PressService $pressService)
    {
        return $pressService->save($request);
    }

    public function edit($id,PressService $pressService)
    {
        return $pressService->edit($id);
    }

    public function update(PressRequest $request,PressService $pressService)
    {
        return $pressService->update($request);
    }

    public function delete(Request $request,PressService $pressService)
    {
        return $pressService->delete($request);
    }

}
