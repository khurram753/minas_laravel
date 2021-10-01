<?php


namespace App\Services\Admin;


use App\FaqCategory;
use App\FaqQuestionsAnswer;
use Illuminate\Support\Facades\DB;

class FAQService
{
    public function index()
    {
        $data  = FaqQuestionsAnswer::all();
        return view('admin.faq.listing',compact('data'));
    }

    public function create()
    {
        $categories = FaqCategory::all();
        return view('admin.faq.create',compact('categories'));
    }

    public function save($request)
    {
        DB::beginTransaction();

        try{
            $save = FaqQuestionsAnswer::create($request->except('_token'));

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
        $data =  FaqQuestionsAnswer::find($id);

        if($data)
        {
            $categories = FaqCategory::all();

            return view('admin.faq_category.edit',compact('data','categories'));
        }
        else{
            return redirect()->route('faqListing')->with('error','Record Not Found');
        }
    }

    public function update($request)
    {
        $data = FaqQuestionsAnswer::find($request->id);


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
        $data = FaqQuestionsAnswer::find($request->id);
        if($data)
        {
            $data->delete();
            return response()->json(['result'=>'success','message'=>'FAQ Deleted']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Record Not Found']);
        }
    }

}
