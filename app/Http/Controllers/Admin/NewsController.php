<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Services\Admin\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(NewsService $newsService)
    {
        return $newsService->index();
    }

    public function create(NewsService $newsService)
    {
        return $newsService->create();
    }

    public function save(NewsRequest $request,NewsService $newsService)
    {
        return $newsService->save($request);
    }

    public function edit($id,NewsService $newsService)
    {
        return $newsService->edit($id);
    }

    public function update(NewsRequest $request,NewsService $newsService)
    {
        return $newsService->update($request);
    }

    public function delete(Request $request,NewsService $newsService)
    {
        return $newsService->delete($request);
    }


}
