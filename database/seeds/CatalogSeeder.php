<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;
class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catalog = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            DB::table('catalog')->insert([
                'barang' => $catalog->sentence,
                'photo' => '',
                'harga' => $catalog->sentence,
            ]);
        }
    }
}