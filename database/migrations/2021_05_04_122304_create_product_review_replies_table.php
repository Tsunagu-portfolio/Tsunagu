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
            $table->string('review_reply_content', 512);
            $table->unsignedBigInteger('parent_product_review_id');
            $table->timestamps();

            $table->foreign('parent_product_review_id')->references('product_review_id')->on('product_review_articles')->onDelete('cascade');
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
