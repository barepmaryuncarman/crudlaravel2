<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'productCode';

    protected $fillable = array("productName","productLine","productScale","productVendor","productDescription","quantityInStock","buyPrice","MSRP");

	public function productline(){
		return $this->belongsTo(productline::class, 'productLine');
	}   

	public function order(){
		return $this->belongsToMany(order::class,orderdetail::class,'productCode','orderNumber');
	} 	  
}
