<?php

use Illuminate\Database\Seeder;

class m_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_users')->insert([
            [
                'password' => bcrypt('sample1'),
                'last_name' => '田中',
                'first_name' => '太郎',
                'postcode' => '1111111',
                'prefecture' => '東京都',
                'municipality' => '足立区',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'email' => 'sample1@sample.com',
                'phone_number' => '11111111111',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample2'),
                'last_name' => '斎藤',
                'first_name' => '優',
                'postcode' => '2222222',
                'prefecture' => '神奈川県',
                'municipality' => '横浜市',
                'address' => '2-2-2',
                'apartments' => '202号室',
                'email' => 'sample2@sample.com',
                'phone_number' => '22222222222',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '西野',
                'first_name' => '紘',
                'postcode' => '3333333',
                'prefecture' => '埼玉県',
                'municipality' => 'さいたま市',
                'address' => '3-3-3',
                'apartments' => '303号室',
                'email' => 'sample3@sample.com',
                'phone_number' => '33333333333',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '松井',
                'first_name' => '秀樹',
                'postcode' => '3333343',
                'prefecture' => '東京都',
                'municipality' => '新宿区',
                'address' => '3-3-4',
                'apartments' => '33号室',
                'email' => 'sample4@sample.com',
                'phone_number' => '43333333333',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '原',
                'first_name' => '辰矢',
                'postcode' => '3333353',
                'prefecture' => '東京都',
                'municipality' => '渋谷区',
                'address' => '3-3-3',
                'apartments' => '303号室',
                'email' => 'sample5@sample.com',
                'phone_number' => '3333343333',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
            [
                'password' => bcrypt('sample3'),
                'last_name' => '大田',
                'first_name' => '信長',
                'postcode' => '3333633',
                'prefecture' => '愛知県',
                'municipality' => '尾張市',
                'address' => '3-3-3',
                'apartments' => '303号室',
                'email' => 'sample7@sample.com',
                'phone_number' => '37333333333',
                'user_classification_id' => '1',
                'delete_flag' => '0',
            ],
        ]);
    }
}
