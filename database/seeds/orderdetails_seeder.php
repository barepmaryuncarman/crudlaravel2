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
        $fake = Factory::create();
        $limit = 50;
        $order = order::get()->pluck('orderNumber')->toArray();
        $customer = customer::get()->pluck('customerNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $orderdetail = new orderdetail;
            $orderdetail->orderNumber = $fake->randomElement($order);
            $orderdetail->productCode = $fake->randomElement($customer);
            $orderdetail->quantityordered = $fake->randomNumber(2);
            $orderdetail->priceEach = $fake->randomNumber(5);
            $orderdetail->orderLineNumber = $fake->randomNumber(9);
            $orderdetail->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $orderdetail->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $orderdetail->save();
        }
    }
}
