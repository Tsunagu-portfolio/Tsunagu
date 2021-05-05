<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_product_review_id');
            $table->unsignedBigInteger('product_review_reply_id');
            $table->timestamps();

            $table->foreign('parent_product_review_id')->references('product_review_id')->on('product_review_articles')->onDelete('cascade');
            $table->foreign('product_review_reply_id')->references('product_review_reply_id')->on('product_review_article_replies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_review_replies');
    }
}
