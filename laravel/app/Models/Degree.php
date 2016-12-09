<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public $timestamps = false;

    public function course(){
    	return $this->hasMany('App\Models\Course', 'course_degree_id','degree_id');
    }
}
