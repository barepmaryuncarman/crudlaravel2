<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey = 'customerNumber';

    protected $fillable = array("contactLastName","contactFirstName","phone","addressLine1","addressLine2","city","state","postalCode","country","salesRepEmployeeNumber","creditLimit" );

    public function order(){
    	return $this->hasMany(order::class,'customerNumber', 'customerNumber');
    }

	public function employee(){
		return $this->belongsTo(employee::class,'employeeNumber');
	}      

    public function payment(){
    	return $this->hasOne(payment::class,'customerNumber', 'customerNumber');
    }

}
