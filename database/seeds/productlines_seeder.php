<?php

use Illuminate\Database\Seeder;

class productlines_seeder extends Seeder
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
        
        //di migration, productlines blm dikasih softDeletes()

        for($i = 1; $i <= $limit; $i++){
            DB::table('productlines')->insert([
                'textDescription' => $faker->text($maxNbChars = 200),
                'htmlDescription' => $faker->text($maxNbChars = 200),
                //'image'           => $faker->image($dir='/tmp', $width='800', $height='400')
                'image'           => $faker->image()
            ]);
        }
    }
}
