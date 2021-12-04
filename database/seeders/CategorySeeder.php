<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Barang Elektronik',
        ]);
        Category::create([
            'name' => 'Barang Mandi',
        ]);
        Category::create([
            'name' => 'Alat Tulis',
        ]);
        Category::create([
            'name' => 'Barang Dapur',
        ]);
    }
}
