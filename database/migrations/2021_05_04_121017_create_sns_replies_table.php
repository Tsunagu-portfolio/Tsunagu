<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_article_id'); 
            $table->unsignedBigInteger('reply_id'); 
            $table->timestamps();

            $table->foreign('parent_article_id')->references('article_id')->on('sns_articles')->onDelete('cascade');
            $table->foreign('reply_id')->references('reply_id')->on('sns_article_replies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sns_replies');
    }
}
