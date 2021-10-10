<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CollectionRequest;
use App\Services\Admin\CollectionService;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(CollectionService $collectionService)
    {
        return $collectionService->index();
    }

    public function create (CollectionService $collectionService)
    {
        return $collectionService->create();
    }

    public function save(CollectionRequest $request,CollectionService $collectionService)
    {
        return $collectionService->save($request);
    }

    public function edit($id,CollectionService $collectionService)
    {
        return $collectionService->edit($id);
    }

    public function update(CollectionRequest $request,CollectionService $collectionService)
    {
        return $collectionService->update($request);
    }

    public function delete(Request $request,CollectionService $collectionService)
    {
        return $collectionService->delete($request);
    }

}
