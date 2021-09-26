<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\ShopService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(Request $request,ShopService $shopService)
    {
        return $shopService->index($request);
    }

    public function detail($category_id,Request $request,ShopService $shopService)
    {
        return $shopService->detail($category_id,$request);
    }

    public function wishlist(Request $request,ShopService $shopService)
    {
        return $shopService->wishlist($request);
    }

    public function productDetail($id,ShopService $shopService)
    {
        return $shopService->productDetail($id);
    }
}
