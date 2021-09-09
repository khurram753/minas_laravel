<?php

namespace App\Services\Site;

use App\ContactUs;
use App\Retailer;
use Illuminate\Support\Facades\DB;

class ContactUsService
{
    public function index()
    {
        $stores = ContactUs::all();
        $greeceRetailers = Retailer::where('country','GREECE')->where('status','accepted')
            ->where('request_type','BECOME A RETAILER')->get();
        $internationalRetailers = Retailer::where('country','!=','GREECE')->where('status','accepted')
            ->where('request_type','BECOME A RETAILER')->get();
        return view('site.contact_us.contact_us',compact('stores','greeceRetailers','internationalRetailers'));
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

    public function contactUsRequest($request)
    {
        DB::beginTransaction();
        try{

            Retailer::create($request->except('_token','terms_condition'));

            DB::commit();
            return response()->json(['result'=>'success','message'=>'Request Send to Admin']);
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['result'=>'error','message'=>'Some Error Occur. Try Later '.$e]);
        }
    }
}
