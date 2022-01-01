<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemInfo extends Model
{
    public function contacts(){
    	return $this->hasMany('App\Contact','system_id');
    }
}
