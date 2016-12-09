<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    public function state(){
    	return $this->hasMany('App\Models\State','state_country_id','country_id');
    }
    
    public function city(){
        return $this->hasManyThrough('App\Models\City', 'App\Models\State');
    }
}
