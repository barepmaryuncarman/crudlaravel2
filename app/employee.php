<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = 'employeeNumber';

    protected $fillable = array("lastName","firstName","extension","email","officeCode","reportsTo","jobTitle" );

    public function customer(){
    	return $this->hasMany(customer::class,'employeeNumber', 'salesRepEmployeeNumber');
    }  

	public function office(){
		return $this->belongsTo(office::class,'officeCode');
	}

    public function reportsto()
    {
        return $this->belongsTo(employee::class, 'employeeNumber');
    }

    public function leader()
    {
        return $this->hasMany(employee::class, 'employeeNumber', 'reportsTo');
    }	        	
}
