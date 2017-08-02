<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Stores;

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
}
