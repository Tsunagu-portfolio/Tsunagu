<?php

use Illuminate\Database\Seeder;

class t_order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = new DateTime();
        DB::table('t_order_details')->insert([
            'products_id' => 1,
            'order_id' => 1,
            'shipment_status_id' => 1,
            'order_quantity' => 2,
            'shipping_address_id' => '1',
            'shipping_method_id' => '1',
            'payment_method_id' => '1',
            'billing_address_id' => '1',
            'shipment_date' => $dt->modify('+2 day')->format('Y-m-d H:i:s')
        ]);
        // DB::table('t_order_details')->insert([
        //     'products_id' => 2,
        //     'order_id' => 2,
        //     'shipment_status_id' => 2,
        //     'order_quantity' => 2,
        //     'shipping_address_id' => '2',
        //     'shipping_method_id' => '2',
        //     'payment_method_id' => '2',
        //     'billing_address_id' => '2',
        //     'shipment_date' => $dt->modify('+2 day')->format('Y-m-d H:i:s')
        // ]);
        // DB::table('t_order_details')->insert([
        //     'products_id' => 3,
        //     'order_id' => 3,
        //     'shipment_status_id' => 3,
        //     'order_quantity' => 3,
        //     'shipping_address_id' => '3',
        //     'shipping_method_id' => '3',
        //     'payment_method_id' => '3',
        //     'billing_address_id' => '3',
        //     'shipment_date' => $dt->modify('+2 day')->format('Y-m-d H:i:s')
        // ]);
    }
}
