<?php

use Illuminate\Database\Seeder;
use App\employee;
use App\customer;
use Faker\Factory;

class customers_seeder extends Seeder
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
        $data = employee::get()->pluck('employeeNumber')->toArray();
        for($i = 1; $i <= $limit; $i++){
            $customer = new customer;
            $customer->customerName = $fake->name;
            $customer->contactLastName = $fake->firstName;
            $customer->contactFirstName = $fake->lastName;
            $customer->phone = $fake->phoneNumber;
            $customer->addressLine1 = $fake->streetAddress;
            $customer->addressLine2 = $fake->secondaryAddress;
            $customer->city = $fake->city;
            $customer->state = $fake->state;
            $customer->postalCode = $fake->postcode;
            $customer->country = $fake->country;
            $customer->salesRepemployeeNumber = $fake->randomElement($data);
            $customer->creditLimit = $fake->creditCardExpirationDateString;
            $customer->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $customer->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $customer->save();
        }
    }
}
