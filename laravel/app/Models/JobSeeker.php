<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $table = "job_seekers";
    public $timestamps = false;

    public function detail(){
    	return $this->hasOne('App\Models\Detail','seek_detail_id','detail_id');
    }

    public function resume(){
    	return $this->hasOne('App\Models\Resume','seek_resume_id','res_id');
    }

    public function application(){
    	return $this->hasMany('App\Models\JobApplication', 'app_seek_id', 'seek_id');
    } 


}
