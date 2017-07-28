<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
   protected $fillable = ['location_name','address','phone','email','prefix','suffix','lat','lan'];

    public function getCreatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }

    public function getUpdatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }
}
