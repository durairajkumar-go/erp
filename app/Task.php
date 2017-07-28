<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Task extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function getTitleAttribute($value) {
        return ucfirst($value);
    }

    public function getBodyAttribute($value) {
        return ucfirst($value);
    }

    public function getCreatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }

    public function getUpdatedAtAttribute($value) {
        return date('d/m/Y',strtotime($value));
    }

}
