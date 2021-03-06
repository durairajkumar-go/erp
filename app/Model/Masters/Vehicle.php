<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class Vehicle extends Model implements LogsActivityInterface
{
	use LogsActivity;
    protected $fillable = ['parent_id','registration_number','chassis_number','insurance','policy_amt','policy_expiry','route_id','service_date','inspection_date','capacity'];

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
		
	//for Formatted Service Date Output
	public function getServiceDateAttribute($value)
	{
		
		if($value!='0000-00-00')
		{
			return date(Session::get('default_date_format'),strtotime($value));
		}
		else
		{
			return '';
		}
	}
	
	//for Formatted Service Date Output
	public function getInspectionDateAttribute($value)
	{
		return date(Session::get('default_date_format'),strtotime($value));
	}
	
	//for Formatted Service Date Input
	public function setServiceDateAttribute($value)
	{
		if($value!='')
		{
			$this->attributes['service_date'] = date('Y-m-d',strtotime($value));
		}
	}
	
	//for Formatted Inspection date Input
	public function setInspectionDateAttribute($value)
	{
		$this->attributes['inspection_date'] = date('Y-m-d',strtotime($value));
	}
	
	//for Formatted Registration Number Input
	public function setRegistrationNumberAttribute($value)
	{
		$this->attributes['registration_number'] = strtoupper($value);
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
