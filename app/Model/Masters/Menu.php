<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD

=======
>>>>>>> 9b6bb459e0dec3df85d8a740f6feeb1788d04332

class Menu extends Model implements LogsActivityInterface
{
    use LogsActivity;
<<<<<<< HEAD
     protected $fillable = ['parent_id','title','slug','link','icon','ordering'];

     //for Formatted Create Date Output
=======
    protected $fillable = ['parent_id','title','slug','link','icon','ordering'];

    //for Formatted Create Date Output
>>>>>>> 9b6bb459e0dec3df85d8a740f6feeb1788d04332
    public function getCreatedAtAttribute($value)
    {
        return date(Session::get('default_date_format'),strtotime($value));
    }
    
    //for Formatted Updated Date Output
    public function getUpdatedAtAttribute($value)
    {
        return date(Session::get('default_date_format'),strtotime($value));
    }
<<<<<<< HEAD
=======
    
    //for Formatted Name Input
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }
>>>>>>> 9b6bb459e0dec3df85d8a740f6feeb1788d04332
	 
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
