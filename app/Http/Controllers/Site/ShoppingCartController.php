<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AddToCartRequest;
use App\Services\Site\ShoppingCartService;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index(ShoppingCartService $shoppingCartService)
    {
        return $shoppingCartService->index();
    }

    public function addToCart(AddToCartRequest $request,ShoppingCartService $shoppingCartService)
    {

        return $shoppingCartService->addToCart($request);
    }

    public function updateCart(Request $request,ShoppingCartService $shoppingCartService)
    {
        return $shoppingCartService->updateCart($request);
    }

    public function removeCart(Request $request, ShoppingCartService $shoppingCartService)
    {
        return $shoppingCartService->removeFromCart($request);
    }

    public function checkCoupon(Request  $request,CouponService $couponService)
    {
        return $couponService->check($request);
    }

//    public function proceedToCheckOut(StripeService $stripeService)
//    {
//        return $stripeService->createAddToCartSession();
//    }

    public function displaySelectedVariation(Request  $request,ShoppingCartService $shoppingCartService)
    {
        return $shoppingCartService->displayVariation($request);
    }

    public function productDetail(Request $request,ShoppingCartService $shoppingCartService)
    {
        return $shoppingCartService->productDetail($request);
    }

    public function clearCart(ShoppingCartService  $shoppingCartService)
    {
        return $shoppingCartService->clearCart();
    }
}
