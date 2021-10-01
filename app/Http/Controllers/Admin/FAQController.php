<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FAQRequest;
use App\Services\Admin\FAQService;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(FAQService $categoryService)
    {
        return $categoryService->index();
    }

    public function create (FAQService $categoryService)
    {
        return $categoryService->create();
    }

    public function save(FAQRequest $request,FAQService $categoryService)
    {
        return $categoryService->save($request);
    }

    public function edit($id,FAQService $categoryService)
    {
        return $categoryService->edit($id);
    }

    public function update(FAQRequest $request,FAQService $categoryService)
    {
        return $categoryService->update($request);
    }

    public function delete(Request $request,FAQService $categoryService)
    {
        return $categoryService->delete($request);
    }

}
