<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Stores;
use \App\Model\Masters\Routes;
use \App\Model\Masters\Vehicle;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Location extends Model implements LogsActivityInterface
{
   use LogsActivity;
   
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
