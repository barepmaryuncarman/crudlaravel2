<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Customer;

class orderdetails_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;

        $order = Order::get()->pluck('orderNumber')->toArray();
        $customer = Customer::get()->pluck('customerNumber')->toArray();

        for($i = 1; $i <= $limit; $i++){
            DB::table('orderdetails')->insert([
                'orderNumber'     => $faker->randomElement($order),
                'productCode'     => $faker->randomElement($customer),
                'quantityOrdered' => $faker->randomNumber(2),
                'priceEach'       => $faker->randomNumber(5),
                'orderLineNumber' => $faker->randomNumber(9)
            ]);
        }
    }
}
