<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;


class Currency extends Model implements LogsActivityInterface
{
	use LogsActivity;

   protected $fillable = ['name','exchange_rate','symbol','default','ledger'];   
    public function location()
    {
        return $this->belongsTo('\App\Model\Masters\Location', 'parent_id');
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
	
	//for Formatted Registration Number Input
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = strtoupper($value);
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
