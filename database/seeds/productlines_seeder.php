<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\productline;

class productlines_seeder extends Seeder
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
        //di migration, productlines blm dikasih softDeletes()
        for($i = 1; $i <= $limit; $i++){
            $productline = new productline;
            $productline->textDescription = $faker->text($maxNbChars = 200);
            $productline->htmlDescription = $faker->text($maxNbChars = 200);
            $productline->image = $faker->imageUrl($width='256', $height='256', 'food');//$faker->image()
            $productline->save();
        }
    }
}
