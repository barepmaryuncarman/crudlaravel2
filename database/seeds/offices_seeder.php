<?php

use Illuminate\Database\Seeder;
use App\office;
use Faker\Factory;

class offices_seeder extends Seeder
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
        for($i = 1; $i <= $limit; $i++){
            $office = new office;
            $office->city = $fake->city;
            $office->phone = $fake->e164PhoneNumber;
            $office->addressLine1 = $fake->streetAddress;
            $office->addressLine2 = $fake->secondaryAddress;
            $office->state = $fake->state;
            $office->country = $fake->country;
            $office->postalCode = $fake->postcode;
            $office->territory = $fake->randomElement($array = ['Asia', 'Europe', 'North America', 'South America', 'Australia', 'Africa']);
            $office->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $office->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $office->save();
        }
    }
}
