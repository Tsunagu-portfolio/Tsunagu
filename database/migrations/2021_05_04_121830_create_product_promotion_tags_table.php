<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPromotionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotion_tags', function (Blueprint $table) {
            $table->bigIncrements('promotion_tag_id');
            $table->unsignedBigInteger('promotion_genre_id');
            $table->string('promotion_tag_name', 8);
            $table->timestamps();

            $table->foreign('promotion_genre_id')->references('promotion_genre_id')->on('promotion_tag_genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_promotion_tags');
    }
}
