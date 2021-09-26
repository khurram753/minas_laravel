<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');

            $table->unsignedBigInteger('material_id')->nullable();
            $table->foreign('material_id')->references('id')->on('materials')
                ->onDelete('cascade');


            $table->unsignedBigInteger('cord_id')->nullable();
            $table->foreign('cord_id')->references('id')->on('cords')
                ->onDelete('cascade');


            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade');

            $table->string('quantity')->nullable();
            $table->string('price')->nullable();


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
        Schema::dropIfExists('order_details');
    }
}
