<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productCode');
            $table->string('productName', 100);
            $table->integer('productLine')->unsigned()->nullable();
            $table->foreign('productLine')->references('productLine')->on('productlines');
            $table->string('productScale');
            $table->string('productVendor', 100);
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->integer('buyPrice');
            $table->string('MSRP');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
