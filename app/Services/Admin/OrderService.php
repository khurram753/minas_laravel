<?php

namespace App\Services\Admin;

use App\Order;
use App\OrderDetail;

class OrderService
{
    public function index()
    {
        $data = Order::orderBy('id','desc')->get();

        return view('admin.order.listing',compact('data'));
    }

    public function orderDetail($id)
    {
        $orderDetails = OrderDetail::where('order_id',$id)->get();

        return view('admin.order.detail',compact('orderDetails'));
    }

    public function completed($id)
    {
        $order = Order::find($id);

        if($order)
        {
            $order->admin_status = 'complete';
            try{
                $order->save();

                return redirect()->back()->with('success','Order Completed');
            }
            catch (Exception $e)
            {
                return redirect()->back()->with('error','Error in completing order'.$e);
            }
        }
        else{
            return redirect()->back()->with('error','Record Not Found');

        }

    }
}
