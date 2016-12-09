<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public $timestamps = false;
    public $fillable = ['state_id','state_name','state_country_id'];
    public function city(){
    	return $this->hasMany('App\Models\City', 'city_state_id', 'state_id');    	
    }
    public function country(){
    	return $this->belongsTo('App\Models\Country','state_country_id','country_id');
    }
}
