<?php

use Illuminate\Database\Seeder;
use App\order;
use App\customer;
use App\orderdetail;
use Faker\Factory;

class orderdetails_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $limit = 50;
        $order = order::get()->pluck('orderNumber')->toArray();
        $customer = customer::get()->pluck('customerNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $orderdetail = new orderdetail;
            $orderdetail->orderNumber = $faker->randomElement($order);
            $orderdetail->productCode = $faker->randomElement($customer);
            $orderdetail->quantityordered = $faker->randomNumber(2);
            $orderdetail->priceEach = $faker->randomNumber(5);
            $orderdetail->orderLineNumber = $faker->randomNumber(9);
            $orderdetail->save();
        }
    }
}
