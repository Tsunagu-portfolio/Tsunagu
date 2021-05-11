<?php

use Illuminate\Database\Seeder;

class t_purchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_purchases')->insert([
            [
                'purchase_price' => '1000',
                'purchase_quantity' => '1',
                'purchase_company' => '1',
                'product_id' => '1',
            ],
        ]);
    }
}
