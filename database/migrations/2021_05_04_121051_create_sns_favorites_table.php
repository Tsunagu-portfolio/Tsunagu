<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSnsFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sns_favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id'); 
            $table->unsignedBigInteger('sns_article_id'); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('m_users')->onDelete('cascade');
            $table->foreign('sns_article_id')->references('article_id')->on('sns_articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sns_favorites');
    }
}
