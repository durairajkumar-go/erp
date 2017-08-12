<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class Store extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['parent_id','name','short_name'];

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
	
	//for Formatted Name Input
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = ucwords(strtolower($value));
	}

    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Store "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Store "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Store "' . $this . '" was deleted';
        }

        return '';
    }

}
