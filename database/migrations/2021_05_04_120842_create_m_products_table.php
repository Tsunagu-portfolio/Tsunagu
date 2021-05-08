<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name', '64');
            $table->bigInteger('category_id')->unsigned();
            $table->string('description', '512');
            $table->string('recommend_comment', '32');
            $table->integer('price');
            $table->bigInteger('sale_status_id')->unsigned();
            $table->bigInteger('product_status_id')->unsigned();
            $table->timestamp('regist_date');
            $table->string('product_image_url');
            $table->unsignedInteger('seller_id');
            $table->char('delete_flag', '1');

            $table->foreign('category_id')->references('id')->on('m_categories');
            $table->foreign('sale_status_id')->references('id')->on('m_sale_statuses');
            $table->foreign('product_status_id')->references('id')->on('m_product_statuses');
            $table->foreign('seller_id')->references('seller_id')->on('m_sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_products');
    }
}
