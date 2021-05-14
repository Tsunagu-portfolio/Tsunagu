<?php

use Illuminate\Database\Seeder;

class t_shipping_addressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_shipping_addresses')->insert([
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
                'destination_classification_id' => '1',
            ],
        ]);
    }
}
