<?php

use Illuminate\Database\Seeder;
use App\productline;
use App\product;
use Faker\Factory;

class products_seeder extends Seeder
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

        $data = Productline::get()->pluck('productLine')->toArray();

        for($i = 1; $i <= $limit; $i++){
            $product = new product;
            $product->productName = $fake->domainWord;
            //productLine ga dikasih unique(),
            //soalnya di foto tabel relasinya [productlines 1:M products]
            //1 productlines punya bnyk product
            $product->productLine = $fake->randomElement($data);
            $product->productScale = $fake->randomElement($array = ['S', 'M', 'L', 'XL', 'Kg', 'Ton', 'Lt']);
            $product->productVendor = $fake->company;
            $product->productDescription = $fake->text($maxNbChars = 200);
            $product->quantityInStock = $fake->randomNumber(2);
            $product->buyPrice = $fake->randomNumber(5);
            $product->MSRP = $fake->isbn13;
            $product->created_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $product->updated_at = $fake->date($format = 'Y-m-d', $max = 'now');
            $product->save();
        }
    }
}
