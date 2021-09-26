<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(OrderService $orderService)
    {
        return $orderService->index();
    }

    public function orderDetail($id,OrderService $orderService)
    {
        return $orderService->orderDetail($id);
    }
}
