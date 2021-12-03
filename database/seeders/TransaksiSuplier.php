<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\TransaksiSuplier;
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
  //       TransaksiSuplier::create([
  //           'name' => 'Ferdy Hahan Pradana',
  //           'email' => 'ferdyhahan5@gmail.com',
  //           'password' => bcrypt('password'),
  //           'level' => 'admin'

		// ]);


        $faker = Faker::create('id_ID');
        $faker->addProvider(new Liior\Faker\Prices($faker));
        $faker->addProvider(new Faker\Provider\en_US\Person($faker));
	    $faker->addProvider(new Faker\Provider\Lorem($faker));
	    $faker->addProvider(new Faker\Provider\Ecommerce($faker));

	    for ($i = 1; $i <= 10; $i++) {

            DB::table('users')->insert([
                'supplier_name' => $faker->name,
                'item_name' => $faker->productName,
                'price' => $faker->price(),
                'qty' => 10,
                'transaction_date' => $faker->date, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
