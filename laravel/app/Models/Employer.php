<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public $timestamps = false;

    public function company(){
    	return $this->belongsTo('App\Models\Company', 'emp_cmp_id', 'cmp_id');
    }

    public function job(){
    	return $this->hasMany('App\Models\Job', 'job_emp_id', 'emp_id');
    }  

    public function application(){
        return $this->hasMany('App\Models\JobApplication', 'app_emp_id', 'emp_id');
    }
}
