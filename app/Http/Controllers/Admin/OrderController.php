<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\OrderService;
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

    public function completed($id,OrderService $orderService)
    {
        return $orderService->completed($id);
    }
}
