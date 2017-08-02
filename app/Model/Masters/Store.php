<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;

class Store extends Model
{
    protected $fillable = ['parent_id','name','short_name'];

    public function location()
    {
        return $this->belongsTo('\App\Model\Masters\Location', 'parent_id');
    }
}
