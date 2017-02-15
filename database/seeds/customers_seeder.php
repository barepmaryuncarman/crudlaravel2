<?php

use Illuminate\Database\Seeder;
use App\Employee;

class customers_seeder extends Seeder
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

        $data = Employee::get()->pluck('employeeNumber')->toArray();

        //kalau error :
        //ganti tipe data `postalCode` jd string/varchar, soalnya dr Faker ada postal code yg bawa dash/strip (ex = 1234-5678)
        //ganti panjang tipe data `phone` jd >20, soalnya dr Faker ada beberapa phone number yg panjangnya lebih dr 20
        //di model customer line 11, hapus tanda petik 'nyasar' paling belakang
        //ganti customerLastName di migration jd contactLastName
        //ganti customerFirstName di migration jd contactFirstName

        for($i = 1; $i <= $limit; $i++){
            DB::table('customers')->insert([
              //'customerName'           => $faker->name,
                'contactLastName'        => $faker->firstName,
                'contactFirstName'       => $faker->lastName,
                'phone'                  => $faker->phoneNumber,
                'addressLine1'           => $faker->streetAddress,
                'addressLine2'           => $faker->secondaryAddress,
                'city'                   => $faker->city,
                'state'                  => $faker->state,
                'postalCode'             => $faker->postcode,
                'country'                => $faker->country,
                'salesRepEmployeeNumber' => $faker->randomElement($data),
                'creditLimit'            => $faker->randomNumber(5)
            ]);
        }
    }
}
