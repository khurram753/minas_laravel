<?php

namespace App\Services\Site;

use App\Cord;
use App\Material;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class ShoppingCartService
{
    public function index()
    {

        if (Session::has('cart') && sizeof(Session::get('cart')) > 0) {

            $cart = array();
            $totalPrice = 0;
            $totalDiscount = 0;
            $productID = array();

            if (Session::has('cart')) {
                foreach (Session::get('cart') as $id => $cartRecord) {
                    $productID[] = [$cartRecord['product_id']];

                    if (Carbon::now() > $cartRecord['productSaleEndDate']) {

                        if ($cartRecord['quantity']) {

//                                $totalPrice += $cartRecord['productOriginalAmountDollar'] * $cartRecord['quantity'];
                            $totalPrice += $cartRecord['productOriginalAmount'] * $cartRecord['quantity'];


//                        $totalPrice += $cartRecord['productOriginalAmount'] * $cartRecord['quantity'];
                        } else {

                            $totalPrice += $cartRecord['productOriginalAmount'];

//                        $totalPrice += $cartRecord['productOriginalAmount'];
                        }
                    } else {
                        if ($cartRecord['quantity']) {

                            $totalPrice += $cartRecord['productSalePrice'] * $cartRecord['quantity'];


                        } else {

                            $totalPrice += $cartRecord['productSalePrice'];

//                        $totalPrice += $cartRecord['productSalePriceDollar'];
                        }
                    }

                }


                $cart = Session::get('cart');
            }

            if (Session::has('couponDiscount')) {
                $couponDiscount = Session::get('couponDiscount');

                if ($couponDiscount['type'] == 'percentage') {
                    $discount = Session::get('couponDiscount')['discount'] * $totalPrice;
                    $totalDiscount = $discount;
                } else {
                    $totalDiscount = Session::get('couponDiscount')['discount'];
                }

            }

            $relatedProducts = Product::whereNotIn('id',$productID)->inRandomOrder()->take('4')->get();
            return view('site.cart.cart', compact('cart', 'totalPrice', 'totalDiscount','relatedProducts'));
        } else {
            return redirect()->route('shop')->with('error', 'Please Add Item in Cart to access this page');
        }


    }

    public function addToCart($request)
    {
        $productRecord = Product::find($request->product_id);

//        dd($request->all());
        if ($productRecord) {

//            $productVariation = Product::find($request->product_id);

            if ($request->quantity > $productRecord->quantity) {
                //through error about quantity is less that expected
                return response()->json(['result' => 'error', 'message' => 'Product Is Not In Stock']);

            }

            if ($productRecord) {
//                if ($productRecord->sale == 1 && Carbon::now() <= Carbon::parse($productRecord->sale_date)) {
//                    $productSaleEndDate = Carbon::parse($productRecord->sale_date);
//
//
//                    $productPrice = $productRecord->sale_amount;
//
//                    $productOriginalAmount = $productRecord->price;
//
//                    $productSalePrice = $productRecord->sale_amount;
//
//
//                }
//                else {

                    $productPrice = $productRecord->price;

                    $productOriginalAmount = $productRecord->price;

                    $productSaleEndDate = null;

                    $productSalePrice = null;


//                }

                if (isset($productRecord->image)) {
                    $image = $productRecord->image;
                } else {
                    $image = 'site/images/close_item.png';
                }

//            dd($productPrice);

                // if cart is empty then this the first product

                $cart = Session::get('cart');
//            $data=$cart[$request->productCountry.'-'.$request->price];

                $stock = $productRecord->quantity;
//                $productSize = null;
//                $productSizeName = null;
//                if ($request->product_size_id) {
//                    $productSize = $request->product_size_id;
//                    $productVariationSizeGet = PivotProductVariationSize::find($request->product_size_id);
//                    if ($productVariationSizeGet) {
//                        $productSizeName = $productVariationSizeGet->productSize->name;
//                    }
//                }
            }

//            dd($stock);

            if ($stock >= 0) {
                if (!$cart) {

                    if($request->material_id)
                    {
                        $material_name = Material::find($request->material_id)->first()->name;
                    }
                    else{
                        $material_name = null;
                    }

                    if($request->cord_id)
                    {
                        $cord_name = Cord::find($request->cord_id)->first()->name;
                    }
                    else{
                        $cord_name = null;
                    }


                    $name = $productRecord->name;

                    $cart = [
                        $request->product_id.'-'.$request->cord_id.'-'.$request->material_id => [

                            "name" => $name,
                            "quantity" => $request->quantity,
                            "price" => $productPrice,
                            "image" => $image,
                            'product_id' => $productRecord->id,

                            'category_id' => $productRecord->category_id,
                            'cord_id' => isset($request->cord_id) ? $request->cord_id:null,
                            'material_id' => isset($request->material_id) ? $request->material_id:null,

                            'productOriginalAmount' => $productOriginalAmount,
                            'productSaleEndDate' => $productSaleEndDate,
                            'productSalePrice' => $productSalePrice,
                            'category_name' => $productRecord->category->name,
                            'material_name' => $material_name,
                            'cord_name' => $cord_name,
                        ]
                    ];


                    Session::put('cart', $cart);

                    return response()->json(['result' => 'success', 'message' => 'Product Added To Cart Successfully.']);

                }

                // if cart not empty then check if this product exist then increment quantity
                if (isset($cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id])) {
//                    dd($stock,$cart[$request->product_id]['quantity']);
                    $currentquantity = $cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id]['quantity'];
                    if ($stock > $currentquantity) {


                        if ($request->quantity) {
                            $cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id]['quantity'] = $cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id]['quantity'] + $request->quantity;
                        } else {
                            $cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id]['quantity']++;
                        }


                        Session::put('cart', $cart);

                        return response()->json(['result' => 'success', 'message' => 'Product Added To Cart Successfully.']);


                    } else {
                        return response()->json(['result' => 'error', 'message' => 'Product Is Not In Stock']);

                    }


                }

                // if item not exist in cart then add to cart with quantity = 1
                if($request->material_id)
                {
                    $material_name = Material::find($request->material_id)->first()->name;
                }
                else{
                    $material_name = null;
                }

                if($request->cord_id)
                {
                    $cord_name = Cord::find($request->cord_id)->first()->name;
                }
                else{
                    $cord_name = null;
                }
                $cart[$request->product_id.'-'.$request->cord_id.'-'.$request->material_id] = [
                    "name" => $productRecord->name,
                    "quantity" => $request->quantity,
                    "price" => $productPrice,
                    "image" => $image,
                    'product_id' => $productRecord->id,

                    'category_id' => $productRecord->category_id,
                    'cord_id' => isset($request->cord_id) ? $request->cord_id:null,
                    'material_id' => isset($request->material_id) ? $request->material_id:null,

                    'productOriginalAmount' => $productOriginalAmount,
                    'productSaleEndDate' => $productSaleEndDate,
                    'productSalePrice' => $productSalePrice,
                    'category_name' => $productRecord->category->name,
                    'material_name' => $material_name,
                    'cord_name' => $cord_name,
                ];

                Session::put('cart', $cart);

                return response()->json(['result' => 'success', 'message' => 'Product Added To Cart Successfully.']);


            } else {
                return response()->json(['result' => 'error', 'message' => 'Product Is Not In Stock']);
            }


        } else {
            return response()->json(['result' => 'error', 'message' => 'Product Not Found.']);
        }

    }

    public function updateCart($request)
    {

        if ($request->id) {

            $cart = Session::get('cart');
            $data = $cart[$request->cart_id];

//            $variationId = explode("-", $request->id);

            $stock = Product::where('id', $request->id)->first();

            if ($stock->quantity >= $request->quantity) {

                $cart[$request->cart_id]['quantity'] = $request->quantity;

                $data = $cart[$request->cart_id];

                Session::put('cart', $cart);


                return response()->json(['result' => 'success', 'message' => 'Cart Updated Successfully.', 'data' => $data]);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Product Is Not In Stock']);
            }

        } else {

            return response()->json(['result' => 'error', 'message' => 'Error in Updating Cart.']);
        }
    }

    public function removeFromCart($request)
    {
        if ($request->id) {

            $cart = Session::get('cart');

            if (isset($cart[$request->id])) {

                $removeValue = $cart[$request->id];
                $btnid = $cart[$request->id];

                unset($cart[$request->id]);

                Session::put('cart', $cart);

                $size = count(Session::get('cart'));
            }

            return response()->json(['result' => 'success', 'message' => 'Product Removed From Cart Successfully.']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Product Not Found In Cart.']);
        }
    }

    public function clearCart()
    {
        Session::forget('cart');
        return redirect()->back()->with('success', "Cart Cleared Successfully");

    }
}
