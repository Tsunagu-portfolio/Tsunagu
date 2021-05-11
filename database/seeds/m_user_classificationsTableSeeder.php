<?php

use Illuminate\Database\Seeder;


class m_user_classificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_user_classifications')->insert([
            [
                'user_classification_name' => '',
            ],
            [
                'user_classification_name' => 'ゴールド',
            ],
            [
                'user_classification_name' => 'プラチナ',
            ],
        ]);
    }
}
