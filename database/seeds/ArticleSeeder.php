<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('article')->insert([
                'photo' => '',
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }
    }
}
