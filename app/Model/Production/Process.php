<?php

namespace App\Model\Production;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Process extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['parent_id','name','short_name'];

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
	
	//for Formatted Service Date Input
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = ucwords(strtolower($value));
	}

    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Process "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Process "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Process "' . $this . '" was deleted';
        }

        return '';
    }

}