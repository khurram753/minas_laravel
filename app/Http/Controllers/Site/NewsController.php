<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(Request $request,NewsService $newsService)
    {
        return $newsService->index($request);
    }

    public function detail($id,NewsService $newsService)
    {
        return $newsService->detail($id);
    }
}
