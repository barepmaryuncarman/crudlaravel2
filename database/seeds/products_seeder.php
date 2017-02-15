<?php

use Illuminate\Database\Seeder;
use App\Productline;

class products_seeder extends Seeder
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

        $data = Productline::get()->pluck('productLine')->toArray();

        for($i = 1; $i <= $limit; $i++){
            DB::table('products')->insert([
                'productName'        => $faker->name,
                //productLine ga dikasih unique(),
                //soalnya di foto tabel relasinya [productlines 1:M products]
                //1 productlines punya bnyk product
                'productLine'        => $faker->randomElement($data),
                'productScale'       => $faker->randomElement($array = ['S', 'M', 'L', 'XL', 'Kg', 'Ton', 'Lt']),
                'productVendor'      => $faker->company,
                'productDescription' => $faker->text($maxNbChars = 200),
                'quantityInStock'    => $faker->randomNumber(2),
                'buyPrice'           => $faker->randomNumber(5),
                'MSRP'               => $faker->isbn13
            ]);
        }
    }
}
