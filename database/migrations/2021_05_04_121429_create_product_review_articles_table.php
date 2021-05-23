<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_articles', function (Blueprint $table) {
            $table->bigIncrements('product_review_id');
            $table->string('review_title', 64);
            $table->string('review_content', 512);
            $table->unsignedInteger('user_id'); 
            $table->unsignedInteger('product_id'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('m_users');
            $table->foreign('product_id')->references('product_id')->on('m_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_review_articles');
    }
}
