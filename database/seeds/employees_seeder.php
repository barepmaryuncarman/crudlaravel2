<?php

use Illuminate\Database\Seeder;
use App\Office;
use App\Employee;

class employees_seeder extends Seeder
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

        $office = Office::get()->pluck('officeCode')->toArray();        

        //kalau error :
        //ganti panjang tipe data `extension` jd >20, soalnya dr Faker ada beberapa phone number yg panjangnya lebih dr 20

        for($i = 1; $i <= $limit; $i++){
            DB::table('employees')->insert([
                'lastName'   => $faker->firstName,
                'firstName'  => $faker->lastName,
                'extension'  => $faker->phoneNumber,
                'email'      => $faker->email,
                'officeCode' => $faker->randomElement($office),
                'jobTitle'   => $faker->jobTitle
            ]);
        }

        //lolzz tar dilanjut
        //buat di set di reportsTo
        /*$employee = Employee::get()->pluck('employeeNumber')->toArray();

        for($i = 1; $i <= $limit; $i++){
            DB::table('employees')->update([
                'reportsTo'  => $faker->randomElement($employee)
            ]);
        }*/
    }
}
