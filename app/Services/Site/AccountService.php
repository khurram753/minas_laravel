<?php

namespace App\Services\Site;

use App\User;
use App\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountService
{
    public function accountPage()
    {
        return view('site.account_pages.my_account');
    }

    public function editAccount()
    {
        return view('site.account_pages.profile');
    }

    public function updateProfile($request)
    {
        $user =  User::where('email',$request->email)->where('id','!=',Auth::user()->id)->first();

        if(!$user)
        {
            if($request->password && $request->old_password) {

                if (Hash::check($request->old_password, Auth::user()->password)) {
                    if ($request->old_password != $request->password) {
                        $new_password = Hash::make($request->password);
                        Auth::user()->password = $new_password;
                    } else {
                        return response()->json(['result' => 'error', 'message' => 'New Password cannot be same as Old Password.']);
                    }
                } else {
                    return response()->json(['result' => 'error', 'message' => 'Old Password is incorrect.']);
                }
            }

            Auth::user()->name = $request->name;
            Auth::user()->email = $request->email;
            Auth::user()->save();
            return response()->json(['result'=>'success','message'=>'Profile Update']);


        }

        else{
            return response()->json(['result'=>'error','message'=>'Email Already Taken']);
        }
    }

    public function removeFromWishlist($request)
    {
        $data = Wishlist::find($request->id);
        if($data)
        {
            if($data->user_id == Auth::user()->id)
            {
                $data->delete();
                return response()->json(['result'=>'success','message'=>'Product Removed From Wishlist']);
            }
            else{
                return response()->json(['result'=>'error','message'=>'Unauthenticated Access']);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }
}
