<?php

use Illuminate\Database\Seeder;

class seller_favoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seller_favorites')->insert([
            [
                'user_id' => '1',
                'seller_id' => '1',
            ],
        ]);
    }
}
