<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->increments('shipping_address_id');
            $table->string('last_name', 16);
            $table->string('first_name', 16);
            $table->integer('zipcode');
            $table->string('prefecture', 16);
            $table->string('municipality', 16);
            $table->string('address', 32);
            $table->string('apartments', 32);
            $table->string('phone_number', 16);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('destination_classification_id');
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
        Schema::dropIfExists('shipping_addreses');
    }
}
