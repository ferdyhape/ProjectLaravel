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
            'jumlah' => '40',
            'gambar' => 'product-images/bakbayi.jpg'
        ]);
        Barang::create([
            'nama' => 'Sabun Mandi Batang',
            'category_id' => '2',
            'harga' => '5000',
            'jumlah' => '123',
            'gambar' => 'product-images/sabunmandibatang.jpg'
        ]);
        Barang::create([
            'nama' => 'Pensil Faber Castel',
            'category_id' => '3',
            'harga' => '3000',
            'jumlah' => '231',
            'gambar' => 'product-images/pensilfabercastel.jpg'
        ]);
        Barang::create([
            'nama' => 'Penghapus',
            'category_id' => '3',
            'harga' => '150',
            'jumlah' => '200',
            'gambar' => 'product-images/penghapus.jpg'
        ]);
        Barang::create([
            'nama' => 'Kabel Olor',
            'category_id' => '1',
            'harga' => '21500',
            'jumlah' => '54',
            'gambar' => 'product-images/kabelolor.jpg'
        ]);
        Barang::create([
            'nama' => 'Televisi LED',
            'category_id' => '1',
            'harga' => '10600000',
            'jumlah' => '30',
            'gambar' => 'product-images/televisiled.jpg'
        ]);
        Barang::create([
            'nama' => 'Sikat Gigi',
            'category_id' => '2',
            'harga' => '9500',
            'jumlah' => '52',
            'gambar' => 'product-images/sikatgigi.jpg'
        ]);
        Barang::create([
            'nama' => 'Shampoo Laifboy',
            'category_id' => '2',
            'harga' => '10500',
            'jumlah' => '199',
            'gambar' => 'product-images/shampoolaifboy.jpg'
        ]);
        Barang::create([
            'nama' => 'Remote TV Samsung',
            'category_id' => '1',
            'harga' => '42000',
            'jumlah' => '34',
            'gambar' => 'product-images/remottvsamsung.jpg'
        ]);
        Barang::create([
            'nama' => 'Telenan Kayu',
            'category_id' => '4',
            'harga' => '9000',
            'jumlah' => '155',
            'gambar' => 'product-images/telenankayu.jpg'
        ]);
        Barang::create([
            'nama' => 'Pisau Sayur',
            'category_id' => '4',
            'harga' => '22000',
            'jumlah' => '122',
            'gambar' => 'product-images/pisausayur.jpg'
        ]);
    }
}
