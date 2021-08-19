<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CordRequest;
use App\Services\Admin\CordsService;
use Illuminate\Http\Request;

class CordsController extends Controller
{
    public function index(CordsService $cordsService)
    {
        return $cordsService->index();
    }

    public function create (CordsService $cordsService)
    {
        return $cordsService->create();
    }

    public function save(CordRequest $request,CordsService $cordsService)
    {
        return $cordsService->save($request);
    }

    public function edit($id,CordsService $cordsService)
    {
        return $cordsService->edit($id);
    }

    public function update(CordRequest $request,CordsService $cordsService)
    {
        return $cordsService->update($request);
    }

    public function delete(Request $request,CordsService $cordsService)
    {
        return $cordsService->delete($request);
    }
}
