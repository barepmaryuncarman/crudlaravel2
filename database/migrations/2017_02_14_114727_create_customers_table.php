<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerNumber');
           // $table->string('customerName');
            $table->string('customerLastName');
            $table->string('customerFirstName');
            $table->string('phone',20);
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('city',50);
            $table->string('state',50);
            $table->integer('postalCode');
            $table->string('country',50);
            $table->integer('salesRepEmployeeNumber')->unsigned()->nullable();
            $table->foreign('salesRepEmployeeNumber')->references('employeeNumber')->on('employees');
            $table->integer('creditLimit');
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
        Schema::dropIfExists('customers');
    }
}
