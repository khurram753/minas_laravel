<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FAQRequest;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(FAQCategoryService $categoryService)
    {
        return $categoryService->index();
    }

    public function create (FAQCategoryService $categoryService)
    {
        return $categoryService->create();
    }

    public function save(FAQRequest $request,FAQCategoryService $categoryService)
    {
        return $categoryService->save($request);
    }

    public function edit($id,FAQCategoryService $categoryService)
    {
        return $categoryService->edit($id);
    }

    public function update(FAQRequest $request,FAQCategoryService $categoryService)
    {
        return $categoryService->update($request);
    }

    public function delete(Request $request,FAQCategoryService $categoryService)
    {
        return $categoryService->delete($request);
    }

}
