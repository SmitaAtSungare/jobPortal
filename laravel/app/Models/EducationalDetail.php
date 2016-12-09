<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationalDetail extends Model
{
    public $timestamps = false;

    public function institute(){
    	return $this->belongsTo('App\Models\Institute', 'edu_ins_id','ins_id');
    }

    public function city(){
    	return $this->belongsTo('App\Models\City', 'edu_city_id', 'city_id');
    }

    public function course(){
    	return $this->belongsTo('App\Models\Course', 'edu_course_id', 'course_id');
    }
}
