<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_articles', function (Blueprint $table) {
            $table->bigIncrements('article_id');
            $table->string('title', 64);
            $table->string('content', 512);
            $table->unsignedInteger('user_id'); 
            $table->unsignedInteger('seller_id'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('m_users');
            $table->foreign('seller_id')->references('seller_id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sns_articles');
    }
}
