<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsArticleRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_article_replies', function (Blueprint $table) {
            $table->bigIncrements('reply_id');
            $table->string('reply_content', 512);
            $table->unsignedInteger('user_id'); 
            $table->timestamps();

            //$table->foreign('article_id')->references('reply_id')->on('sns_articles');
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
        Schema::dropIfExists('sns_article_replies');
    }
}
