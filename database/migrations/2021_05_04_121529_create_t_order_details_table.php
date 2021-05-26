<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('shipment_status_id');
            $table->integer('order_quantity');
            $table->unsignedInteger('shipping_address_id');
            $table->unsignedInteger('shipping_method_id');
            $table->unsignedInteger('payment_method_id');
            $table->unsignedBigInteger('billing_address_id');
            $table->timestamp('shipment_date');

            $table->foreign('product_id')->references('id')->on('m_products');
            $table->foreign('order_id')->references('id')->on('t_orders')->onDelete('cascade');
            $table->foreign('shipment_status_id')->references('shipment_status_id')->on('m_shipment_statuses');
            $table->foreign('shipping_address_id')->references('shipping_address_id')->on('t_shipping_addresses');
            $table->foreign('shipping_method_id')->references('shipping_method_id')->on('t_shipping_methods');
            $table->foreign('payment_method_id')->references('payment_method_id')->on('t_payment_methods');
            $table->foreign('billing_address_id')->references('billing_address_id')->on('t_billing_addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_order_details');
    }
}
