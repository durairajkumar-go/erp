<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogsActivityInterface;
use Spatie\Activitylog\LogsActivity;

class RoleMenuMapping extends Model implements LogsActivityInterface
{
    use LogsActivity;
    protected $fillable = ['parent_id','menu_id','add','edit','delete','search','copy','csv','excel','pdf','print'];

    public function getActivityDescriptionForEvent($eventName)
    {
        if ($eventName == 'created')
        {
            return 'RoleMenuMapping"' . $this . '" was created';
        }

        if ($eventName == 'updated')
        {
            return 'RoleMenuMapping"' . $this . '" was updated';
        }

        if ($eventName == 'deleted')
        {
            return 'RoleMenuMapping"' . $this . '" was deleted';
        }

        return '';
    }

}
