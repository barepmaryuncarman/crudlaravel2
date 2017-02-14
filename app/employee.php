<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = 'employeeNumber';

    protected $fillable = array("lastName","firstName","extension","email","officeCode","reportsTo","jobTitle" );
}
