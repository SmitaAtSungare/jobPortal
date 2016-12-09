<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	public $timestamps = false;

    public function detail(){
    	return $this->hasOne('App\Models\Detail', 'cmp_detail_id', 'detail_id');
    }

	public function experience(){
    	return $this->hasMany('App\Models\ExperienceDetail','emp_cmp_id','cmp_id');
    }

    public function employer(){
    	return $this->hasMany('App\Models\Employer', 'emp_cmp_id','cmp_id');
    }

}
