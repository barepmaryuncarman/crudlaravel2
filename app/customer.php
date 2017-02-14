<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey = 'customerNumber';

    protected $fillable = array("customerNama","contactLastName","contactFirstName","phone","addressLine1","addressLine2","city","state","postalCode","country","salesRepEmployeeNumber","creditLimit" );'
}
