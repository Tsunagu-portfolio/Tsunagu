<?php

use Illuminate\Database\Seeder;

class product_review_article_repliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_review_article_replies')->insert([
            [
                'product_review_reply_content' => 'とっても美味しくいただきました!',
                'user_id' => '1',
            ],
        ]);
    }
}
