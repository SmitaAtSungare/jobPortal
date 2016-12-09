<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public $timestamps = false;

    public function resume(){
    	return $this->belongsTo('App\Models\JobSeeker','seek_resume_id','res_id');
    }
}
