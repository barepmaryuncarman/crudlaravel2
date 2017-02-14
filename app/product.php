<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'productCode';

    protected $fillable = array("productName","productLine","productScale","productVendor","productDescription","quantityInStock","buyPrice","MSRP");
}
