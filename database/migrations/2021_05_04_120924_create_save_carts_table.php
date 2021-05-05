<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaveCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('product_id'); 
            $table->unsignedBigInteger('cart_user_id'); 
            $table->timestamps();

            $table->foreign('cart_user_id')->references('cart_user_id')->on('cart_users');
            $table->foreign('product_id')->references('id')->on('m_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('save_carts');
    }
}
