<?php

namespace App\Services\Site;

use App\Category;
use App\CMS;

use App\Cord;
use App\CustomOrder;
use App\Heritage;
use App\Material;
use App\Order;
use App\Product;
use App\ProductCollection;
use App\User;
use App\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class ShopService
{
    public function index($request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        if ($request->has('success') && Session::get('stripe_session_id')) {

//            Stripe::setApiKey(env('STRIPE_SECRET'));

            $retrieveStripeSession = \Stripe\Checkout\Session::retrieve(Session::get('stripe_session_id'));

            if ($retrieveStripeSession) {
                $getPaymentIntent = PaymentIntent::retrieve($retrieveStripeSession->payment_intent);

                if ($getPaymentIntent) {
                    $customOrder = Order::where('stripe_session_id',Session::get('stripe_session_id'))->first();
                    if ($customOrder) {

                        $customOrder->city = $getPaymentIntent->charges->data[0]->billing_details->address->city;
                        $customOrder->country =  $getPaymentIntent->charges->data[0]->billing_details->address->country;
                        $customOrder->postal_code =  $getPaymentIntent->charges->data[0]->billing_details->address->postal_code;
                        $customOrder->address1 = $getPaymentIntent->charges->data[0]->billing_details->address->line1;
                        $customOrder->address2 =  $getPaymentIntent->charges->data[0]->billing_details->address->line2;
                        $customOrder->status = $retrieveStripeSession->payment_status;
                    }
                    $customOrder->save();

                    $getOrderDetail =  $customOrder->orderDetail;
                    foreach ($getOrderDetail as $orderDetail)
                    {
                        $quantity = $orderDetail->product->quantity;
                        if($quantity)
                        {
                            $updatedQuantity = $quantity - $orderDetail->quantity;
                            $orderDetail->product->update(['quantity'=>$updatedQuantity]);
                        }


                    }

                    $emailArray = ['email' => Auth::user()->email,
                        'name'=>Auth::user()->name,'order_id'=>$customOrder->id];

                    $user = User::find(Auth::user()->id);

//                    Notification::send($user, new OrderGenerateNotification($emailArray));
//                    Notification::route('mail', env('MAIL_CLIENT'))->notify(new AdminOrderGenerateNotification($emailArray));


                    $request->session()->forget('stripe_session_id');


                }
            }
        }

        $cms = CMS::where('page_name','shop')->first();

        $categories = Category::all();

        $heritageImages = Heritage::select('image')->get();

        $pendant_category = Category::where('name','Gold')->first();

        $getThreeCategory = Category::limit(3)->get();


        $pendants = array();


        if($pendant_category)
        {
            $pendants = Product::where('category_id',$pendant_category->id)->inRandomOrder()->limit('3')->get();
        }
        else{
            if(isset($getThreeCategory[0]))
            {
                $pendants = Product::where('category_id',$getThreeCategory[0]->id)->inRandomOrder()->limit('3')->get();
            }

        }


        $mensCategory = Category::where('name','Mens Accessory')->first();
        $mensCollection = array();
        if($mensCategory)
        {
            $mensCollection = Product::where('category_id',$mensCategory->id)->inRandomOrder()->limit('4')->get();
        }
        else{
            if(isset($getThreeCategory[1]))
            {
                $mensCollection = Product::where('category_id',$getThreeCategory[1]->id)->inRandomOrder()->limit('3')->get();
            }
        }

        $earingCategory = Category::where('name','Earing')->first();
        $earings =  array();
        if($earingCategory)
        {
            $earings = Product::where('category_id',$earingCategory->id)->inRandomOrder()->limit('3')->get();
        }
        else{
            if(isset($getThreeCategory[2]))
            {
                $earings = Product::where('category_id',$getThreeCategory[2]->id)->inRandomOrder()->limit('3')->get();
            }
        }


        return view('site.shop.shop',compact('heritageImages','earings','mensCollection',
            'pendants','categories','cms'));
    }

    public function detail($category_id,$request)
    {
        $data = Category::find($category_id);

        if($data)
        {
            $products = Product::where('category_id',$data->id);

            if($request->sortbytype)
            {
                if($request->sortbytype == 'desc')
                {
                    $products = $products->orderBy('id',$request->sortbytype);
                }
                elseif($request->sortbytype == 'atoz')
                {

                    $products = $products->orderBy('name','asc');


                }
                elseif($request->sortbytype == 'ztoa')
                {

                    $products = $products->orderBy('name','desc');
                }
                elseif($request->sortbytype == 'hightolow')
                {

                    $products = $products->orderBy('price','desc');

                }
                elseif($request->sortbytype == 'lowtohigh')
                {

                    $products = $products->orderBy('price','asc');
                }

            }

            if($request->collection_id)
            {
//                $products = $products->whereHas('cord',function (Builder $query) use($request){
//                    $query->where('cord_id', $request->cord_id);
//                });
                $products = $products->where('collection_id',$request->collection_id);
            }

            if($request->material_id)
            {
                $products = $products->whereHas('material',function (Builder $query) use($request){
                    $query->where('material_id', $request->material_id);
                });
            }

            $products = $products->get();
            $materials = Material::all();
            $cords = ProductCollection::all();



            return view('site.shop.shop_category',compact('products','data','materials',
                'cords'));
        }
        else{
            return redirect()->route('shop')->with('error','Category Not Found');
        }
    }

    public function wishlist($request)
    {
        $product = Product::find($request->id);

        if($product)
        {
            $wishlist = Wishlist::where('product_id',$request->id)->where('user_id',Auth::user()->id)->first();
            if($wishlist)
            {
                $wishlist->delete();
                return response()->json(['result'=>'success','message'=>'Product Removed From Wishlist']);
            }
            else{
                Wishlist::create(['product_id'=>$request->id,'user_id'=>Auth::user()->id]);
            }
            return response()->json(['result'=>'success','message'=>'Product Added To Wishlist']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function productDetail($id)
    {
        $data = Product::find($id);

        if($data)
        {
            $materials = $data->material;
            $cords = $data->cord;
            $relatedProducts = Product::where('category_id',$data->category_id)->where('id','!=',$data->id)
                ->limit('4')->inRandomOrder()->get();
            return view('site.shop.detail',compact('data','materials','cords','relatedProducts'));
        }
        else{
            return redirect()->back()->with('error','Record Not Found');
        }
    }
}
