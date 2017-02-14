<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employeeNumber');
            $table->string('lastName');
            $table->string('firstName',50);
            $table->string('extension',20);
            $table->string('email',150)->unique();
            $table->integer('officeCode')->unsigned()->nullable();
            $table->foreign('officeCode')->references('officeCode')->on('offices');
            $table->integer('reportsTo')->unsigned()->nullable();
            $table->foreign('reportsTo')->references('employeeNumber')->on('employees');
            $table->string('jobTitle',50);
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

        Schema::dropIfExists('employees');
    }
}
