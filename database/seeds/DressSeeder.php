<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class DressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dress = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            DB::table('dress')->insert([
                'barang' => $dress->sentence,
                'photo' => '',
                'harga' => $dress->sentence,
            ]);
        }
    }
}