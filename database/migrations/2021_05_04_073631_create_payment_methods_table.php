<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('payment_method_id');
            $table->string('credit_card_number', 24);
            $table->string('expiration_month', 8);
            $table->string('expiration_year', 8);
            $table->string('verification_code', 8);
            $table->string('card_holder_name', 32);
            $table->unsignedInteger('user_id');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
}
