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
        $fake = Factory::create();
        $limit = 10;
        $data = customer::get()->pluck('customerNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $payment = new payment;
            //customerNumber dikasih unique(),
            //soalnya di foto tabel relasinya [customers 1:1 payments]
            //gajelas payment apaan
            $payment->customerNumber = $fake->unique()->randomElement($data);
            $payment->paymentDate = $fake->dateTime();
            $payment->amount = $fake->randomNumber(6);
            $payment->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $payment->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $payment->save();
        }
    }
}
