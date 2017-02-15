<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    protected $primaryKey = 'officeCode';

    protected $fillable = array("city","phone","addressLine1","addressLine2","state","country","postalCode","territory");

    public function employee(){
    	return $this->hasMany(employee::class,'officeCode','officeCode');
    }     
}
