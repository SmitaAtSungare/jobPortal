<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;

    public function degree(){
    	return $this->belongsTo('App\Models\Degree', 'course_degree_id','degree_id');
    }

    public function education(){
    	return $this->hasMany('App\Models\EducationalDetail', 'edu_course_id','course_id');
    }

}
