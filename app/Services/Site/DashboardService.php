<?php


namespace App\Services\Site;


use App\Order;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;

class DashboardService
{
    public function index()
    {
        $order = Order::where('user_id',Auth::user()->id)->count();
        return view('user.dashboard.dashboard',compact('order'));
    }

    public function wishlist()
    {
        $data =  Wishlist::where('user_id',Auth::user()->id)->get();

        return view('user.wishlist.listing',compact('data'));
    }
}
