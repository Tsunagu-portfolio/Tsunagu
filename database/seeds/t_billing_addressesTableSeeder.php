<?php

use Illuminate\Database\Seeder;

class t_billing_addressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_billing_addresses')->insert([
            [
                'last_name' => '田中',
                'first_name' => '太郎',
                'postcode' => '1111111',
                'prefecture' => '東京都',
                'municipality' => '足立区',
                'address' => '1-1-1',
                'apartments' => '101号室',
                'phone_number' => '11111111111',
                'user_id' => '1',
            ],
            [
             
                'last_name' => '斎藤',
                'first_name' => '優',
                'postcode' => '2222222',
                'prefecture' => '神奈川県',
                'municipality' => '横浜市',
                'address' => '2-2-2',
                'apartments' => '202号室',
                'phone_number' => '22222222222',
                'user_id' => '2',
            ],
            [
             
                'last_name' => '西野',
                'first_name' => '紘',
                'postcode' => '3333333',
                'prefecture' => '埼玉県',
                'municipality' => 'さいたま市',
                'address' => '3-3-3',
                'apartments' => '303号室',
                'phone_number' => '33333333333',
                'user_id' => '3',
            ],
        ]);
    }
}
