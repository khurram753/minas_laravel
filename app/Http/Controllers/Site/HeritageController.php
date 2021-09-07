<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\HeritageService;
use Illuminate\Http\Request;

class HeritageController extends Controller
{
    public function index(HeritageService $heritageService)
    {
        return $heritageService->index();
    }

    public function show(Request $request,HeritageService $heritageService)
    {
        return $heritageService->show($request);
    }

    public function detail($id,HeritageService $heritageService)
    {
        return $heritageService->detail($id);
    }
}
