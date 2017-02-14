<?php

use Illuminate\Database\Seeder;

class offices_seeder extends Seeder
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

        //kalau error :
        //ganti tipe data `postalCode` jd string/varchar, soalnya dr Faker ada postal code yg bawa dash/strip (ex = 1234-5678)
        //ganti panjang tipe data `phone` jd >20, soalnya dr Faker ada beberapa phone number yg panjangnya lebih dr 20

        for($i = 1; $i <= $limit; $i++){
            DB::table('offices')->insert([
                'city'         => $faker->city,
                'phone'        => $faker->phoneNumber,
                'addressLine1' => $faker->streetAddress,
                'addressLine2' => $faker->secondaryAddress,
                'state'        => $faker->state,
                'country'      => $faker->country,
                'postalCode'   => $faker->postcode,
                'territory'    => $faker->randomElement($array = ['Asia', 'Europe', 'North America', 'South America', 'Australia', 'Africa'])
            ]);
        }
    }
}
