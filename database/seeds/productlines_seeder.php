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
        $fake = Factory::create();
        $limit = 10;
        //di migration, productlines blm dikasih softDeletes()
        for($i = 1; $i <= $limit; $i++){
            $productline = new productline;
            $productline->textDescription = $fake->text($maxNbChars = 200);
            $productline->htmlDescription = $fake->text($maxNbChars = 200);
            $productline->image = $fake->imageUrl($width='256', $height='256', 'food');//$fake->image()
            $productline->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $productline->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $productline->save();
        }
    }
}
