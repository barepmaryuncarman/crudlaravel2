<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $primaryKey = 'orderNumber';

    protected $fillable = array("orderDate","requiredDate","shippedDate","status","comments","customerNumber");

	public function customer(){
		return $this->belongsTo(customer::class, 'customerNumber');
	} 

	public function product(){
		return $this->belongsToMany(product::class,orderdetail::class,"orderNumber","productCode");
	} 	    
}
