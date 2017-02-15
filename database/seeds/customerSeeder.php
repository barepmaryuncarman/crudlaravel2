<?php

use Illuminate\Database\Seeder;
use App\customer as customerModel;
use App\employee as employeeModel;
use Faker\Factory as fake;

class customerSeeder extends Seeder
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
        $employeeArr = employeeModel::get()->pluck("employeeNumber")->toArray();
        for($i=0;$i<$limit;$i++){
            $customer  =  new customerModel;
            $customer->customerLastName = $fake->firstName($gender = 'male'|'female');
            $customer->customerFirstName = $fake->lastName;
            $customer->phone = $fake->e164PhoneNumber;
            $customer->addressLine1 = $fake->address;
            $customer->addressLine2 = $fake->address;
            $customer->city = $fake->city;
            $customer->state = $fake->state;
            $customer->postalCode = $fake->postcode;
            $customer->country = $fake->country;
            $customer->salesRepEmployeeNumber = $fake->randomElement($employeeArr);
            $customer->creditLimit = $fake->creditCardExpirationDateString;
            $customer->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $customer->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $customer->save();
        }          
    }
}
