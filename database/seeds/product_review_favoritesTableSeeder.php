<?php

use Illuminate\Database\Seeder;

class product_review_favoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_review_favorites')->insert([
            [
                'user_id' => '1',
                'product_review_id' => '1',
            ],
        ]);
    }
}
