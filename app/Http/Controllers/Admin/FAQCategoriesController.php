<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\FAQCategoryRequest;
use App\Http\Requests\Admin\FAQRequest;
use App\Services\Admin\FAQCategoryService;
use Illuminate\Http\Request;

class FAQCategoriesController extends Controller
{
    public function index(FAQCategoryService $categoryService)
    {
        return $categoryService->index();
    }

    public function create (FAQCategoryService $categoryService)
    {
        return $categoryService->create();
    }

    public function save(FAQCategoryRequest $request,FAQCategoryService $categoryService)
    {
        return $categoryService->save($request);
    }

    public function edit($id,FAQCategoryService $categoryService)
    {
        return $categoryService->edit($id);
    }

    public function update(FAQCategoryRequest $request,FAQCategoryService $categoryService)
    {
        return $categoryService->update($request);
    }

    public function delete(Request $request,FAQCategoryService $categoryService)
    {
        return $categoryService->delete($request);
    }

}
