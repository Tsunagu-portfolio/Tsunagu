<?php

use Illuminate\Database\Seeder;

class t_destination_classificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_destination_classifications')->insert([
            [
                'destination_classification_id' => '1',
            ],            
        ]);
    }
}
