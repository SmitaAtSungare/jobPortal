<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    public $timestamps = false;

    public function type(){
    	return $this->belongsTo('App\Models\JobType','job_jt_id','jt_id');
    }

    public function skill(){
    	return $this->hasMany('App\Models\Skill','skill_job_cat_id','job_cat_id');
    }
}
