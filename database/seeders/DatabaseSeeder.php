<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Ferdy Hahan Pradana',
            'email' => 'ferdyhahan5@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'admin'
        ]);
        Category::create([
            'name' => 'Barang Elektronik',
        ]);
        Category::create([
            'name' => 'Alat Mandi',
        ]);
        Category::create([
            'name' => 'Alat Tulis',
        ]);
    }
}
