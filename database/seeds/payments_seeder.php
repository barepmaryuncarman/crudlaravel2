<?php

use Illuminate\Database\Seeder;
use App\customer;
use App\payment;
use Faker\Factory;

class payments_seeder extends Seeder
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
            $payment = new payment;
            //customerNumber dikasih unique(),
            //soalnya di foto tabel relasinya [customers 1:1 payments]
            //gajelas payment apaan
            $payment->customerNumber = $faker->unique()->randomElement($data);
            $payment->paymentDate = $faker->dateTime();
            $payment->amount = $faker->randomNumber(6);
            $payment->save();
        }
    }
}
