<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id'); 
            $table->unsignedBigInteger('product_review_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('m_users');
            $table->foreign('product_review_id')->references('product_review_id')->on('product_review_articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_review_favorites');
    }
}
