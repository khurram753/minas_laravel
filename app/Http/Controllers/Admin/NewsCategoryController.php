<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsCategoryRequest;
use App\Services\Admin\NewsCategoryService;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->index();
    }

    public function create(NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->create();
    }

    public function save(NewsCategoryRequest $request,NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->save($request);
    }

    public function edit($id,NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->edit($id);
    }

    public function update(NewsCategoryRequest $request,NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->update($request);
    }

    public function delete(Request $request,NewsCategoryService $newsCategoryService)
    {
        return $newsCategoryService->delete($request);
    }
}
