<?php

use Illuminate\Database\Seeder;

class set_promotion_tagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('set_promotion_tags')->insert([
            [
                'product_id' => '1',
                'promotion_tag_id' => '1',
            ],
        ]);
    }
}
