<?php


namespace App\Services\Site;


use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function index()
    {
        $data = Order::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
        return view('user.order.listing',compact('data'));
    }

    public function orderDetail($id)
    {
        $orderDetails = OrderDetail::where('order_id',$id)->get();

        return view('user.order.detail',compact('orderDetails'));
    }
}
