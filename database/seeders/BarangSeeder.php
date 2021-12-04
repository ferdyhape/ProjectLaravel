<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'nama' => 'Bak Mandi',
            'category_id' => '2',
            'harga' => '20000',
            'jumlah' => '40'
        ]);
        Barang::create([
            'nama' => 'Sabun Mandi',
            'category_id' => '2',
            'harga' => '5000',
            'jumlah' => '123'
        ]);
        Barang::create([
            'nama' => 'Pensil',
            'category_id' => '3',
            'harga' => '3000',
            'jumlah' => '231'
        ]);
        Barang::create([
            'nama' => 'Penghapus',
            'category_id' => '3',
            'harga' => '150',
            'jumlah' => '200'
        ]);
        Barang::create([
            'nama' => 'Kabel Olor',
            'category_id' => '1',
            'harga' => '21500',
            'jumlah' => '54'
        ]);
        Barang::create([
            'nama' => 'Televisi LED',
            'category_id' => '1',
            'harga' => '10600000',
            'jumlah' => '30'
        ]);
        Barang::create([
            'nama' => 'Sikat Gigi',
            'category_id' => '2',
            'harga' => '9500',
            'jumlah' => '52'
        ]);
        Barang::create([
            'nama' => 'Shampoo Laifboy',
            'category_id' => '2',
            'harga' => '4500',
            'jumlah' => '199'
        ]);
        Barang::create([
            'nama' => 'Remote AC Sharp',
            'category_id' => '1',
            'harga' => '42000',
            'jumlah' => '34'
        ]);
        Barang::create([
            'nama' => 'Telenan',
            'category_id' => '4',
            'harga' => '9000',
            'jumlah' => '155'
        ]);
        Barang::create([
            'nama' => 'Pisau Sayur',
            'category_id' => '4',
            'harga' => '22000',
            'jumlah' => '122'
        ]);
    }
}
