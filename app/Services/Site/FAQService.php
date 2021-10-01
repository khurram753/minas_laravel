<?php

namespace App\Services\Site;

use App\FaqCategory;
use App\FaqQuestionsAnswer;

class FAQService
{
    public function faq($request)
    {
        $categories = FaqCategory::all();

        if($request->category_id)
        {
            $records = FaqQuestionsAnswer::where('faq_category_id',$request->category_id)->get();
        }
        else{
            $getFirstCategory =  FaqCategory::first();
            $records = FaqQuestionsAnswer::where('faq_category_id',$getFirstCategory->id)->get();
        }

        return view('site.faq.faq',compact('categories','records'));
    }
}
