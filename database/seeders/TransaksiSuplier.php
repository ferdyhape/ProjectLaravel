<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TransaksiSuplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {

            DB::table('transaksi_supliers')->insert([
                'supplier_name' => $faker->name,
                'item_name' => $faker->product_name(),
                'price' => $faker->price(),
                'qty' => 10,
                'transaction_date' => $faker->date,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
