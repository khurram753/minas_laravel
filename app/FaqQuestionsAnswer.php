<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqQuestionsAnswer extends Model
{
    //
    protected $table = 'faq_questions_answers';

    protected $guarded = [];

    public function faqCategory()
    {
        return $this->belongsTo(FaqCategory::class,'faq_category_id');
    }
}
