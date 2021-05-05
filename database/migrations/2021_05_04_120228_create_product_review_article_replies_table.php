<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewArticleRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review_article_replies', function (Blueprint $table) {
            $table->bigIncrements('product_review_reply_id');
            $table->string('product_review_reply_content', 64);
            $table->unsignedInteger('user_id'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('m_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_review_article_replies');
    }
}
