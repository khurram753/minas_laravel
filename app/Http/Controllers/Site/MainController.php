<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\MainService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(MainService $mainService)
    {
        return $mainService->index();
    }
}
