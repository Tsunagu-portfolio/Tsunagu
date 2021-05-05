<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionTagGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_tag_genres', function (Blueprint $table) {
            $table->bigIncrements('promotion_genre_id');
            $table->string('promotion_genre_name', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotion_tag_genres');
    }
}
