<?php


namespace App\Services\Admin;


use App\Category;
use App\ContactUs;
use App\Helpers\ImageUploadHelper;
use App\Retailer;
use Illuminate\Support\Facades\DB;
use File;

class ContactUsService
{
    public function index()
    {
        $data  = ContactUs::all();
        return view('admin.contact_us.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.contact_us.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = ContactUs::create($request->except('_token'));

            DB::commit();
            return response()->json(['result'=>'success','message'=>'Record Save']);

        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return response()->json(['result'=>'error','message'=>'Unable to Save Record: '.$e]);
        }
    }

    public function edit($id)
    {
        $data =  ContactUs::find($id);

        if($data)
        {
            return view('admin.contact_us.edit',compact('data'));
        }
        else{
            return redirect()->route('contactUsListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = ContactUs::find($request->id);


        if($data) {
            DB::beginTransaction();


            try {
                $save = $data->update($request->except('_token'));

                DB::commit();
                return response()->json(['result' => 'success', 'message' => 'Record Updated']);

            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['result' => 'error', 'message' => 'Unable to Update Record: ' . $e]);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }


    public function delete($request)
    {
        $data = ContactUs::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'Record Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

    public function retailerListing()
    {
        $data = Retailer::all();
        return view('admin.contact_us.retailer',compact('data'));
    }

    public function changeStatus($request)
    {
        $data = Retailer::find($request->id);
        if ($data) {
            if ($data->status == 'accepted') {
                $data->status = 'pending';
            } else {
                $data->status = 'accepted';

            }

            if ($data->save()) {
                return response()->json(['result' => 'success', 'message' => "Status Change"]);
            } else {
                return response()->json(['result' => 'error', 'message' => "Error in status change"]);
            }


        } else {
            return response()->json(['result' => 'error', 'message' => "Link Not Found"]);
        }
    }

}
