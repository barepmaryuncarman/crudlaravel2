<?php

use Illuminate\Database\Seeder;
use App\customer as customerModel;
use App\order as orderModel;
use Faker\Factory as fake;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fake = fake::create();
        $limit = 10;
        $customerArr = customerModel::get()->pluck("customerNumber")->toArray();
        for($i=0;$i<$limit;$i++){
        	$order = new orderModel;
            $order->orderDate = $fake->dateTime;
            $order->requiredDate = $fake->dateTime;
            $order->shippedDate = $fake->dateTime;
            $order->status = $fake->numberBetween($min = 1, $max = 9);
            $order->comments = $fake->sentence($nbWords = 6, $variableNbWords = true);
            $order->customerNumber = $fake->randomElement($customerArr);
			$order->created_at = $fake->dateTime;
			$order->updated_at = $fake->dateTime;
            $order->save();
        }      	
    }
}
