<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function craftsman(){
    	return $this->belongsTo('App\Craftsman','craftsman_id');
    }
    public function systemInfo(){
    	return $this->belongsTo('App\SystemInfo','system_id');
    }
}
