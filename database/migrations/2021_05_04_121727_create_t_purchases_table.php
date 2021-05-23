<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_price');
            $table->integer('purchase_quantity');
            $table->string('purchase_company', 128);
            $table->timestamp('order_date');
            $table->timestamp('purchase_date')->nullable();
            $table->integer('product_id')->unsigned();
            
            $table->foreign('product_id')->references('product_id')->on('m_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_purchases');
    }
}
