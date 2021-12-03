<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ferdy Hahan Pradana',
            'email' => 'ferdyhahan5@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'admin'
        ]);


        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('password'),
                'level' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
