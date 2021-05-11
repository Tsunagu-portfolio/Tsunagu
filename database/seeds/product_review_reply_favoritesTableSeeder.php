<?php

use Illuminate\Database\Seeder;

class product_review_reply_favoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_review_reply_favorites')->insert([
            [
                'user_id' => '1',
                'product_review_reply_id' => '1',
            ],
        ]);
    }
}
