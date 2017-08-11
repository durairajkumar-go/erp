<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Menu extends Model implements LogsActivityInterface
{
    use LogsActivity;
     protected $fillable = ['parent_id','title','slug','link','icon','ordering'];
	 
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
