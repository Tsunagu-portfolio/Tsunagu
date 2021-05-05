<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_users', function (Blueprint $table) {
            $table->bigIncrements('cart_user_id');
            $table->unsignedInteger('user_id'); 
            $table->unsignedBigInteger('session_id'); 
            $table->timestamps();

            //$table->foreign('session_id')->references('id')->on('session');
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
        Schema::dropIfExists('cart_users');
    }
}
