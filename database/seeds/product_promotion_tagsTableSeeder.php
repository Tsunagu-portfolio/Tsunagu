<?php

use Illuminate\Database\Seeder;

class product_promotion_tagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_promotion_tags')->insert([
            [
                'promotion_tag_name' => '肉',
            ],
        ]);
    }
}
