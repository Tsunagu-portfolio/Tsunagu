<?php

use Illuminate\Database\Seeder;

class t_payment_methodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_payment_methods')->insert([
            [
                // 'payment_method_id' => '1',
                'credit_card_number' => '12345678',
                'expiration_month' => '12',
                'expiration_year' => '25',
                'verification_code' => '123',
                'card_holder_name' => 'TARO YAMADA',
                'user_id' => '1',
            ],
        ]);
    }
}
