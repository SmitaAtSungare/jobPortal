<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $timestamps = false;

	public function category(){
    	return $this->belongsTo('App\Models\JobCategory','skill_job_cat_id','job_cat_id');
    }
    
}
