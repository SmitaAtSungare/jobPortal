<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	public $timestamps = false;

    public function state(){
    	return $this->belongsTo('App\Models\State','city_state_id','state_id');
    }
    
    public function detail(){
    	return $this->hasMany('App\Models\Detail','detail_city_id','city_id');
    }

    public function education(){
    	return $this->hasMany('App\Models\EducationalDetail','detail_city_id','city_id');
    }

}
