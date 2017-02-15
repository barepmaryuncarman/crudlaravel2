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
        $fake = Factory::create();
        $limit = 10;
        $office = office::get()->pluck('officeCode')->toArray();        
        for($i = 1; $i <= $limit; $i++){
            $employee = new employee;
            $employee->lastName = $fake->firstName;
            $employee->firstName = $fake->lastName;
            $employee->extension = $fake->e164PhoneNumber;
            $employee->email = $fake->email;
            $employee->officeCode = $fake->randomElement($office);
            $employee->jobTitle = $fake->jobTitle;
            $employee->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $employee->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $employee->save();
        }

        $employee = employee::get()->pluck('employeeNumber')->toArray();
        for($i = 0; $i < count($employee); $i++){
            $employeeCek = employee::find($employee[$i]);
            $employeeCek->reportsTo = $fake->randomElement($employee);
            $employeeCek->save();
        }
    }
}
