<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class Role extends Model implements LogsActivityInterface
{
   use LogsActivity;

	protected $fillable = ['name','short_name'];

    public function users()
    {
        return $this->hasMany('\App\User');
    }


    //for Formatted Create Date Output
    public function getCreatedAtAttribute($value)
    {
        return date(Session::get('default_date_format'),strtotime($value));
    }
    
    //for Formatted Updated Date Output
    public function getUpdatedAtAttribute($value)
    {
        return date(Session::get('default_date_format'),strtotime($value));
    }

	
	//for Formatted Name Input
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = ucwords(strtolower($value));
	}

    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Role "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Role "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Role "' . $this . '" was deleted';
        }

        return '';
    }

}
