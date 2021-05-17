<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetPromotionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_promotion_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('product_id');
            $table->unsignedBigInteger('promotion_tag_id'); 
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('m_products');
            $table->foreign('promotion_tag_id')->references('promotion_tag_id')->on('product_promotion_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_promotion_tags');
    }
}
