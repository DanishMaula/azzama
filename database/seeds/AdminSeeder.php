<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('adminpassword'), // password
        'remember_token' => Str::random(10),
        ]);
    }
}