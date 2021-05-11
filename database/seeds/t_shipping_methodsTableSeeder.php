<?php

use Illuminate\Database\Seeder;

class t_shipping_methodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_shipping_methods')->insert([
            'shipping_method' => '発送済み',
        ]);
    }
}
