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
        //di urut sesuai migration
        $this->call(offices_seeder::class);
        $this->call(employees_seeder::class);
        $this->call(productlines_seeder::class);
        $this->call(products_seeder::class);
        $this->call(customers_seeder::class);
        $this->call(orders_seeder::class);
        $this->call(payments_seeder::class);
        $this->call(orderdetails_seeder::class);
    }
}
