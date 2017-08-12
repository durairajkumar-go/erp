<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;





class Menu extends Model implements LogsActivityInterface
{
    use LogsActivity;

     protected $fillable = ['parent_id','title','slug','link','icon','ordering'];

     //for Formatted Create Date Output

    protected $fillable = ['parent_id','title','slug','link','icon','ordering'];

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
            return 'Routes "' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'Routes "' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'Routes "' . $this . '" was deleted';
        }

        return '';
    }
}
