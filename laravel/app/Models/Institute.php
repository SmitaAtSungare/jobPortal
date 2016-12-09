<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
	public $timestamps = false;

    public function university(){
    	return $this->belongsTo('App\Models\University','ins_uni_id','uni_id');
    }

	public function education(){
    	return $this->hasMany('App\Models\EducationalDetail','edu_ins_id','ins_id');
    }
}
