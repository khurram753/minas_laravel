<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Services\Admin\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreService $storeService)
    {
        return $storeService->index();
    }

    public function create (StoreService $storeService)
    {
        return $storeService->create();
    }

    public function save(StoreRequest $request,StoreService $storeService)
    {
        return $storeService->save($request);
    }

    public function edit($id,StoreService $storeService)
    {
        return $storeService->edit($id);
    }

    public function update(StoreRequest $request,StoreService $storeService)
    {
        return $storeService->update($request);
    }

    public function delete(Request $request,StoreService $storeService)
    {
        return $storeService->delete($request);
    }

    public function deleteStoreImage(Request $request,StoreService $storeService)
    {
        return $storeService->deleteStoreImage($request);
    }

}
