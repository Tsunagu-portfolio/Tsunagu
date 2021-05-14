<?php

use Illuminate\Database\Seeder;

class t_ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_orders')->insert([
            [
                'user_id' => '1',
                'order_number' => '12345678',
                'order_date' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
