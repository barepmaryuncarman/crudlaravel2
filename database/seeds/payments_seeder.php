<?php

use Illuminate\Database\Seeder;
use App\Customer;

class payments_seeder extends Seeder
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
            DB::table('payments')->insert([
                //customerNumber dikasih unique(),
                //soalnya di foto tabel relasinya [customers 1:1 payments]
                //gajelas payment apaan
                'customerNumber' => $faker->unique()->randomElement($data),
                'paymentDate'    => $faker->dateTime(),
                'amount'         => $faker->randomNumber(6)
            ]);
        }
    }
}
