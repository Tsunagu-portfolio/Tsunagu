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
                'seller_name' => 'Q字KOUJI',
                'seller_category' => '農家',
                'postcode' => '1111111',
                'prefecture' => '栃木県',
                'municipality' => '宇都宮市',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '栃木産',
                'seller_message' => '副業でお笑いやってます',
                'user_id' => '4',
                'delete_flag' => '0',
            ],
            [
                'seller_name' => '中泉農園',
                'seller_category' => '農家',
                'postcode' => '1111111',
                'prefecture' => '北海道',
                'municipality' => '江別市',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '北海道産',
                'seller_message' => 'おいしい道産野菜を作ってます｡',
                'user_id' => '2',
                'delete_flag' => '0',
            ],
            [
                'seller_name' => '山田肉牛',
                'seller_category' => '肉牛生産者',
                'postcode' => '1111111',
                'prefecture' => '兵庫県',
                'municipality' => '神戸市',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '神戸産',
                'seller_message' => '真心込めて育ててます',
                'user_id' => '2',
                'delete_flag' => '0',
            ],
            [
                'seller_name' => '伝説の漁師松方',
                'seller_category' => '漁師',
                'postcode' => '1111111',
                'prefecture' => '青森県',
                'municipality' => '大間市',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '大間産',
                'seller_message' => 'マグロ界のレジェンド',
                'user_id' => '3',
                'delete_flag' => '0',
            ],
            [
                'seller_name' => 'S城島',
                'seller_category' => '米農家',
                'postcode' => '1111111',
                'prefecture' => '福島県',
                'municipality' => 'D村',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '09012345678',
                'producing_district' => '福島産',
                'seller_message' => '副業でアイドルやってます',
                'user_id' => '4',
                'delete_flag' => '0',
            ],
            
        ]);
    }
}
