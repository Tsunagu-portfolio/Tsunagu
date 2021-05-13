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
                'user_classification_name' => 'ノーマル会員',
            ],
            [
                'user_classification_name' => 'ゴールド会員',
            ],
            [
                'user_classification_name' => 'プラチナ会員',
            ],
        ]);
    }
}
