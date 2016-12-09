<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;    

    public function employer(){
    	return $this->belongsTo('App\Models\Employer', 'job_emp_id', 'emp_id');
    }  

    public function application(){
    	return $this->hasMany('App\Models\JobApplication', 'app_job_id', 'job_id');
    }  
}
