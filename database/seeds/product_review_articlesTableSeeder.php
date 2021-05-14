<?php

use Illuminate\Database\Seeder;

class product_review_articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_review_articles')->insert([
            [
                'review_title' => '新鮮さが違う!',
                'review_content' => 'とっても美味しくいただきました!',
                'user_id' => '1',
                'product_id' => '1',
            ],
        ]);
    }
}
