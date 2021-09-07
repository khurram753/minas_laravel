<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\QualityService;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index(QualityService $qualityService)
    {
        return $qualityService->index();
    }
}
