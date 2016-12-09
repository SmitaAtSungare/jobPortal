<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $timestamps = false;

    public function seeker(){
    	return $this->belongsTo('App\Models\JobSeeker','seek_detail_id','detail_id');
    }

    public function company(){
    	return $this->belongsTo('App\Models\Company', 'cmp_detail_id', 'detail_id');
    }

    public function city(){
    	return $this->belongsTo('App\Models\City', 'city_id', 'city_id');
    }
}
