<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;

class Routes extends Model
{
    protected $fillable = ['parent_id','name'];

     public function location()
    {
        return $this->belongsTo('\App\Model\Masters\Location', 'parent_id');
    } 
}
