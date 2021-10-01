<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_questions_answers', function (Blueprint $table) {
            $table->id();

            $table->string('question');
            $table->text('answer');
            $table->unsignedBigInteger('faq_category_id')->nullable();
            $table->foreign('faq_category_id')->references('id')->on('faq_categories')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_questions_answers');
    }
}
