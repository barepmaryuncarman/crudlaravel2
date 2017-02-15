<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productline extends Model
{
    protected $primaryKey = 'productLine';

    protected $fillable = array("textDescription","htmlDescription","image");

    public function product(){
    	return $this->hasMany(product::class,'productLine','productLine');
    }     
}
