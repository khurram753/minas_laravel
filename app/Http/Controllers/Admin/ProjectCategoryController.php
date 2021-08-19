<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectCategoryRequest;
use App\Services\Admin\ProjectCategoryService;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index(ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->index();
    }

    public function create(ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->create();
    }

    public function save(ProjectCategoryRequest $request,ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->save($request);
    }

    public function edit($id,ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->edit($id);
    }

    public function update(ProjectCategoryRequest $request,ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->update($request);
    }

    public function delete(Request $request,ProjectCategoryService $projectCategoryService)
    {
        return $projectCategoryService->delete($request);
    }
}
