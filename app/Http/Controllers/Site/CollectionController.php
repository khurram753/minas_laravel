<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\CollectionService;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //
    public function index($collection_id,Request $request,CollectionService $collectionService)
    {
        return $collectionService->index($collection_id,$request);
    }

}
