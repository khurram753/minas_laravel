<?php


namespace App\Services\Admin;


use App\FaqCategory;
use Illuminate\Support\Facades\DB;

class FAQCategoryService
{
    public function index()
    {
        $data  = FaqCategory::all();
        return view('admin.faq_category.listing',compact('data'));
    }

    public function create()
    {
        return view('admin.faq_category.create');
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = FaqCategory::create($request->except('_token'));

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
        $data =  FaqCategory::find($id);

        if($data)
        {
            return view('admin.faq_category.edit',compact('data'));
        }
        else{
            return redirect()->route('faqCategoryListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = FaqCategory::find($request->id);


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
        $data = FaqCategory::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'FAQ Category Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
