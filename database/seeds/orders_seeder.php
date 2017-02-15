<?php

use Illuminate\Database\Seeder;
use App\customer;
use App\order;
use Faker\Factory;

class orders_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 10;
        $data = customer::get()->pluck('customerNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $order = new order;
            $order->orderDate = $faker->dateTime();
            $order->requiredDate = $faker->dateTime();
            $order->shippedDate = $faker->dateTime();
            //0 = batal, 1 = dipesan/pending, 2 = dikirim/dalam pengiriman, 3 = done/transaksi selesai
            $order->status = $faker->randomElement($array = [0, 1, 2, 3]);
            $order->comments = $faker->text($maxNbChars = 100);
            $order->customerNumber = $faker->randomElement($data);
            $order->save();
        }
    }
}