<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
    public $timestamps = false;

    public function company(){
    	return $this->belongsTo('App\Models\Company','exp_cmp_id','cmp_id');
    }
}
