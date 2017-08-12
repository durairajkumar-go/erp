<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class Dashboard extends Model implements LogsActivityInterface
{
    //
	use LogsActivity;
	 protected $fillable = ['name','icon','default','more_info','query','ordering','background_color'];

    public function location()
    {
        return $this->belongsTo('\App\Model\Masters\Location', 'dashboard_icon');
    }
	public function getCreatedAtAttribute($value)
	{
		return date(Session::get('default_date_format'),strtotime($value));
	}
	
	//for Formatted Updated Date Output
	public function getUpdatedAtAttribute($value)
	{
		return date(Session::get('default_date_format'),strtotime($value));
	}
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = strtoupper($value);
	}
	 public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Dashboard "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Dashboard "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Dashboard "' . $this . '" was deleted';
        }

        return '';
    }
}
