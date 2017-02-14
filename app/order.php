<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $primaryKey = 'orderNumber';

    protected $fillable = array("orderDate","requiredDate","shippedDate","status","comments","customerNumber");
}
