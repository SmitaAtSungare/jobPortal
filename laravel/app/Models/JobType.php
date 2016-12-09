<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    public $timestamps = false;
    
    public function category(){
    	return $this->hasMany('App\Models\JobCategory','job_jt_id','jt_id');
    }
}
