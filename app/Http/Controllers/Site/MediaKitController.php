<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\MediaKitService;
use Illuminate\Http\Request;

class MediaKitController extends Controller
{
    public function index(Request $request,MediaKitService $mediaKitService)
    {
        return $mediaKitService->index($request);
    }
}
