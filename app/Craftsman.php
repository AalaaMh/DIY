<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Craftsman extends Model
{
    public function contact(){
    	return $this->hasMany('App\Contact','craftsman_id');
    }
}
