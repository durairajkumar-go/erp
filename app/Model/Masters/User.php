<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Model\Masters\Role;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class User extends Authenticatable implements LogsActivityInterface
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','shift_access','validity_date','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	//for Formatted Create Date Output
	public function getCreatedAtAttribute($value)
	{
		return date('d-m-Y',strtotime($value));
	}
	
	//for Formatted Updated Date Output
	public function getUpdatedAtAttribute($value)
	{
		return date('d-m-Y',strtotime($value));
	}

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
	//for Formatted Vlidity Date Input
	public function setValidityDateAttribute($value)
	{
		$this->attributes['validity_date'] = date('Y-m-d',strtotime($value));
	}
    
    public function role()
    {
        return $this->belongsTo('\App\Model\Masters\Role', 'role_id');
    }
	
	public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Vehicle "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Vehicle "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Vehicle "' . $this . '" was deleted';
        }

        return '';
    }

}
