<?php

use Illuminate\Database\Seeder;
use App\office;
use App\employee;
use Faker\Factory;

class employees_seeder extends Seeder
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
        $office = office::get()->pluck('officeCode')->toArray();        
        for($i = 1; $i <= $limit; $i++){
            $employee = new employee;
            $employee->lastName = $faker->firstName;
            $employee->firstName = $faker->lastName;
            $employee->extension = $faker->e164PhoneNumber;
            $employee->email = $faker->email;
            $employee->officeCode = $faker->randomElement($office);
            $employee->jobTitle = $faker->jobTitle;
            $employee->save();
        }

        $employee = employee::get()->pluck('employeeNumber')->toArray();
        for($i = 0; $i < count($employee); $i++){
            $employeeCek = employee::find($employee[$i]);
            $employeeCek->reportsTo = $faker->randomElement($employee);
            $employeeCek->save();
        }
    }
}
