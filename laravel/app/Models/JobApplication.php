<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    public $timestamps = false;

    public function job(){
    	return $this->belongsTo('App\Models\Job', 'app_job_id', 'job_id');
    }

    public function seeker(){
    	return $this->belongsTo('App\Models\JobSeeker', 'app_seek_id', 'seek_id');
    }  

    public function employeer(){
    	return $this->belongsTo('App\Models\Employeer', 'app_emp_id', 'emp_id');
    }
}
