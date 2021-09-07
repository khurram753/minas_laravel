<?php

namespace App\Services\Site;

use App\ContactUs;

class ContactUsService
{
    public function index()
    {
        $stores = ContactUs::all();
        return view('site.contact_us.contact_us',compact('stores'));
    }

    public function storeDetail($id)
    {
        $store = ContactUs::find($id);
        if($store)
        {
            return view('site.contact_us.store_detail',compact('store'));
        }
        else{
            return redirect()->route('contactUs')->with('error','Record Not Found');
        }
    }
}
