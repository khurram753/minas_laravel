<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request,ProjectService $projectService)
    {
        return $projectService->index($request);
    }

    public function detail($id,ProjectService $projectService)
    {
        return $projectService->detail($id);
    }
}
