<?php

namespace App\Services\Site;

use App\Country;
use App\Order;
use App\OrderDetail;
use App\ShippingAddress;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;

class CheckoutService
{
    public function createSession($request)
    {
        $totalPrice = 0;
        $lineItemArray = array();
        DB::beginTransaction();

        Stripe::setApiKey(env('STRIPE_SECRET'));


        if (Session::has('cart')) {
            foreach (Session::get('cart') as $id => $cartRecord) {

                if (Carbon::now() > $cartRecord['productSaleEndDate']) {

                    if ($cartRecord['quantity']) {

                        $totalPrice += $cartRecord['productOriginalAmount'] * $cartRecord['quantity'];
                        $productPrice = $cartRecord['productOriginalAmount'] * $cartRecord['quantity'];

                    } else {
                        $totalPrice += $cartRecord['productOriginalAmount'];
                        $productPrice = $cartRecord['productOriginalAmount'];

                    }
                } else {
                    if ($cartRecord['quantity']) {


                        $totalPrice += $cartRecord['productSalePrice'] * $cartRecord['quantity'];
                        $productPrice = $cartRecord['productSalePrice'] * $cartRecord['quantity'];


                    } else {

                        $totalPrice += $cartRecord['productSalePrice'];
                        $productPrice = $cartRecord['productSalePrice'];

                    }
                }

                $name = $cartRecord['name'];


                $lineItemArray[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $name,
                        ],
                        'unit_amount_decimal' => $productPrice * 100,
                    ],
                    'quantity' => $cartRecord['quantity'],

                ];


            }
        }


        $session = \Stripe\Checkout\Session::create([
            'billing_address_collection' => 'required',

            'payment_method_types' => ['card'],
            'line_items' =>
                $lineItemArray,

            'mode' => 'payment',
            'success_url' => route('shop', ['success' => 'true']),
            'cancel_url' => route('shop', ['error' => 'true']),
        ]);
        if ($session->id) {

            $order = new Order();

            $order->user_id = Auth::user()->id;
            $order->email = Auth::user()->email;
            $order->stripe_session_id = $session->id;
            $order->status = 'pending';
            $order->payment_method = 'stripe';


            if ($order->save()) {
                $request->session()->put([
                    'stripe_session_id' => $session->id
                ]);

                if (Session::has('cart')) {
                    foreach (Session::get('cart') as $id => $cartRecord1) {

                        if ($cartRecord1['productSaleEndDate']) {
                            if (Carbon::now() < $cartRecord1['productSaleEndDate']) {

                                $price = $cartRecord1['productSalePrice'];
//                                $currency = 'USD';


                            } else {

                                $price = $cartRecord1['productOriginalAmount'];
//                                $currency = 'USD';

                            }
                        } else {

                            $price = $cartRecord1['productOriginalAmount'];
//                            $currency = 'USD';
                        }


                        $orderDetail = OrderDetail::create([
                            'order_id' => $order->id, 'product_id' => $cartRecord1['product_id'],
                            'material_id' => $cartRecord1['material_id'],
                            'cord_id' => $cartRecord1['cord_id'],
                            'quantity' => $cartRecord1['quantity'], 'price' => $price
                        ]);

                    }
                }


                Session::forget('cart');
                DB::commit();
                return response()->json(['result' => 'success', 'data' => $session->id]);
            } else {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Error Came. Try again Later']);
            }
        }
        else {
            DB::rollBack();
            return response()->json(['result' => 'error', 'message' => 'Error Came. Try again Later']);
        }

    }


}
