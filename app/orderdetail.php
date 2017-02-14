<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $fillable = array("orderNumber","productCode","quantityOrdered","priceEach","orderLineNumber");
}
