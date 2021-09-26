<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(DashboardService $dashboardService)
    {
        return $dashboardService->index();
    }

    public function wishlist(DashboardService $dashboardService)
    {
        return $dashboardService->wishlist();
    }
}
