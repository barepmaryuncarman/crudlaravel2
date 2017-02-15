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
        $fake = Factory::create();
        $limit = 10;
        $data = customer::get()->pluck('customerNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $order = new order;
            $order->orderDate = $fake->dateTime();
            $order->requiredDate = $fake->dateTime();
            $order->shippedDate = $fake->dateTime();
            //0 = batal, 1 = dipesan/pending, 2 = dikirim/dalam pengiriman, 3 = done/transaksi selesai
            $order->status = $fake->randomElement($array = [0, 1, 2, 3]);
            $order->comments = $fake->text($maxNbChars = 100);
            $order->customerNumber = $fake->randomElement($data);
            $order->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $order->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $order->save();
        }
    }
}