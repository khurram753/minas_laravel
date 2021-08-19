<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Services\Admin\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(ProjectService $projectService)
    {
        return $projectService->index();
    }

    public function create(ProjectService $projectService)
    {
        return $projectService->create();
    }

    public function save(ProjectRequest $request,ProjectService $projectService)
    {
        return $projectService->save($request);
    }

    public function edit($id,ProjectService $projectService)
    {
        return $projectService->edit($id);
    }

    public function update(ProjectRequest $request,ProjectService $projectService)
    {
        return $projectService->update($request);
    }

    public function delete(Request $request,ProjectService $projectService)
    {
        return $projectService->delete($request);
    }

    public function updateGallery(Request $request,ProjectService $projectService)
    {
        return $projectService->saveGallery($request);
    }

    public function deleteProjectGallery (Request $request,ProjectService $projectService)
    {
        return $projectService->deleteGallery($request);
    }
}
