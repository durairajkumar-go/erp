<?php

namespace App\Model\Masters;

use Illuminate\Database\Eloquent\Model;

class RoleMenuMapping extends Model
{
        protected $fillable = ['parent_id','menu_id','add','edit','delete','search','copy','csv','excel','pdf','print'];
}
