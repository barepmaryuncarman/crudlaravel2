<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productline extends Model
{
    protected $primaryKey = 'productline';

    protected $fillable = array("textDescription","htmlDescription","image");
}
