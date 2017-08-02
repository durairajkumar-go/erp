<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Model\Masters\Role;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst(strtolower($value));
    }

    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    public function getEmailAttribute($value) {
        return strtolower($value);
    }
    
    public function role()
    {
        return $this->belongsTo('\App\Model\Masters\Role', 'role_id');
    }

}
