<?php

use Illuminate\Database\Seeder;

class m_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            [
                'category_name' => '果物',
            ],
            [
                'category_name' => '野菜',
            ],
            [
                'category_name' => '魚介',
            ],
            [
                'category_name' => '肉',
            ],
            [
                'category_name' => 'お米',
            ],
            [
                'category_name' => '酒類',
            ],
            [
                'category_name' => '加工品',
            ],
        ]);
    }
}
