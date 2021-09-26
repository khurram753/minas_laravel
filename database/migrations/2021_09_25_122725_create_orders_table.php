<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->string('email')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->nullable();
            $table->string('admin_status')->nullable();
            $table->string('payment_method');
            $table->string('stripe_session_id')->nullable();

            $table->string('country')->nullable();
            $table->string('address1')->nullable();
            $table->string("address2")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("city")->nullable();



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
        Schema::dropIfExists('orders');
    }
}
