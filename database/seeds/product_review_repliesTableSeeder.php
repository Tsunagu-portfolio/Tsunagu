<?php

use Illuminate\Database\Seeder;

class product_review_repliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_review_replies')->insert([
            [
                'review_reply_content' => '1',
                'parent_product_review_id' => '1',
            ],
        ]);
    }
}
