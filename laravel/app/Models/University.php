<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
   	public $timestamps = false;
    public function institute(){
    	return $this->hasMany('App\Model\Institute','ins_uni_id','uni_id');
    }
}
