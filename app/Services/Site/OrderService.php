<?php


namespace App\Services\Site;


use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function index()
    {
        $data = Order::where('user_id',Auth::user()->id)->where('status','paid')->orderBy('id','desc')->get();
//        return view('user.order.listing',compact('data'));
        return view('site.account_pages.orders',compact('data'));
    }

    public function orderDetail($id)
    {
        $order = Order::find($id);

        if($order)
        {
            $orderDetails = OrderDetail::where('order_id',$id)->get();

//        return view('user.order.detail',compact('orderDetails'));
            return view('site.account_pages.order_detail',compact('orderDetails','order'));
        }

    }
}
