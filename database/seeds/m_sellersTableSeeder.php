<?php

use Illuminate\Database\Seeder;

class m_sellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_sellers')->insert([
            [
                'seller_name' => '田中農園',
                'seller_category' => '農家',
                'postcode' => '1111111',
                'prefecture' => '東京都',
                'municipality' => '足立区',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '東京産',
                'seller_message' => '無農薬有機栽培で作っています',
                'user_id' => '1',
                'delete_flag' => '0',
            ],
            // [
            //     'password' => bcrypt('sample2'),
            //     'last_name' => '斎藤',
            //     'first_name' => '優',
            //     'zipcode' => '2222222',
            //     'prefecture' => '神奈川県',
            //     'municipality' => '横浜市',
            //     'address' => '2-2-2',
            //     'apartments' => '202号室',
            //     'email' => 'sample2@sample.com',
            //     'phone_number' => '22222222222',
            //     'user_classification_id' => '2',
            //     'company_name' => '株式会社B',
            //     'delete_flag' => '0',
            // ],
            // [
            //     'password' => bcrypt('sample3'),
            //     'last_name' => '西野',
            //     'first_name' => '紘',
            //     'zipcode' => '3333333',
            //     'prefecture' => '埼玉県',
            //     'municipality' => 'さいたま市',
            //     'address' => '3-3-3',
            //     'apartments' => '303号室',
            //     'email' => 'sample3@sample.com',
            //     'phone_number' => '33333333333',
            //     'user_classification_id' => '3',
            //     'company_name' => '株式会社C',
            //     'delete_flag' => '0',
            // ],
        ]);
    }
}
