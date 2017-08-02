<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\User;

class Role extends Model
{

	protected $fillable = ['name','short_name'];

    public function users()
    {
        return $this->hasMany('\App\User');
    }
}
