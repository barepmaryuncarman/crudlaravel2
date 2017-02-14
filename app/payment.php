<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $primaryKey = 'checkNumber';

    protected $fillable = array("customerNumber","paymentDate","amount");
}
