<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\AboutService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(AboutService $aboutService)
    {
        return $aboutService->index();
    }
}
