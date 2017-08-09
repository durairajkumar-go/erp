<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Stores;
<<<<<<< HEAD
use \App\Model\Masters\Routes;
=======
//use \App\Model\Masters\Vehicle;
>>>>>>> c882db49b31c62efef6cf31ce626777a0e5f4bae

class Location extends Model
{
   protected $fillable = ['name','address','phone','email','prefix','suffix','lat','lan'];

    public function getCreatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }

    public function getUpdatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }

    public function stores()
    {
        return $this->hasMany('\App\Model\Masters\Stores');
    } 
	public function Routes()
    {
        return $this->hasMany('\App\Model\Masters\Routes');
    }
	
	/* public function vehicle()
    {
        return $this->hasMany('\App\Model\Masters\Vehicle');
    }*/
}
