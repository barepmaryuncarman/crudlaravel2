<?php

use Illuminate\Database\Seeder;
use App\Customer;

class orders_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;

        $data = Customer::get()->pluck('customerNumber')->toArray();

        for($i = 1; $i <= $limit; $i++){
            DB::table('orders')->insert([
                'orderDate'      => $faker->dateTime(),
                'requiredDate'   => $faker->dateTime(),
                'shippedDate'    => $faker->dateTime(),
                //0 = batal, 1 = dipesan/pending, 2 = dikirim/dalam pengiriman, 3 = done/transaksi selesai
                'status'         => $faker->randomElement($array = [0, 1, 2, 3]),
                'comments'       => $faker->text($maxNbChars = 100),
                'customerNumber' => $faker->randomElement($data)
            ]);
        }
    }
}