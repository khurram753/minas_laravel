<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\Site\CheckoutService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function createSession(Request $request, CheckoutService $checkoutService)
    {
        return $checkoutService->createSession($request);
    }
}
