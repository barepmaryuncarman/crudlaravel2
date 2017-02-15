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
        $faker = Factory::create();
        $limit = 10;
        for($i = 1; $i <= $limit; $i++){
            $office = new office;
            $office->city = $faker->city;
            $office->phone = $faker->e164PhoneNumber;
            $office->addressLine1 = $faker->streetAddress;
            $office->addressLine2 = $faker->secondaryAddress;
            $office->state = $faker->state;
            $office->country = $faker->country;
            $office->postalCode = $faker->postcode;
            $office->territory = $faker->randomElement($array = ['Asia', 'Europe', 'North America', 'South America', 'Australia', 'Africa']);
            $office->save();
        }
    }
}
