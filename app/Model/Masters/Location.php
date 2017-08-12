<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Stores;
use \App\Model\Masters\Routes;
use \App\Model\Masters\Vehicle;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class Location extends Model implements LogsActivityInterface
{
   use LogsActivity;
   
   protected $fillable = ['name','address','phone','email','prefix','suffix','lat','lan'];

<<<<<<< HEAD
    public function getCreatedAtAttribute($value) {
        return date(Session::get('default_date_format'),strtotime($value));
    }
Session::get('default_date_format')
    public function getUpdatedAtAttribute($value) {
        return date(Session::get('default_date_format'),strtotime($value));
=======
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
>>>>>>> 9b6bb459e0dec3df85d8a740f6feeb1788d04332
    }

    public function stores()
    {
        return $this->hasMany('\App\Model\Masters\Stores');
    } 
	public function Routes()
    {
        return $this->hasMany('\App\Model\Masters\Routes');
    }
	public function Vehicle()
    {
        return $this->hasMany('\App\Model\Masters\Vehicle');
    }

    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Location "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Location "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Location "' . $this . '" was deleted';
        }

        return '';
    }
	
}
