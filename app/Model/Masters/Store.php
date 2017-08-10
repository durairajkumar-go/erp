<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use \App\Model\Masters\Location;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class Store extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['parent_id','name','short_name'];

    public function location()
    {
        return $this->belongsTo('\App\Model\Masters\Location', 'parent_id');
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
