<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(customerSeeder::class);
        $this->call(orderSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
        //di urut sesuai migration
        $this->call(offices_seeder::class);
        $this->call(employees_seeder::class); //still buggy
        $this->call(productlines_seeder::class);
        $this->call(products_seeder::class);
        $this->call(customers_seeder::class);
        $this->call(orders_seeder::class);
        $this->call(payments_seeder::class);
        $this->call(orderdetails_seeder::class);
>>>>>>> c2519a805d702b9b19e1040cd1c29f2f05968b6a
    }
}
