<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;

class RoleMenuMapping extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['parent_id','menu_id','add','edit','delete','search','copy','csv','excel','pdf','print'];

	
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
	
    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'Role Mapping "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Role Mapping "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Role Mapping "' . $this . '" was deleted';
        }

        return '';
    }

}
