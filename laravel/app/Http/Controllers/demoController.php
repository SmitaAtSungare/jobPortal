<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Job;
use App\Models\City;
use App\Models\Skill;
class demoController extends Controller
{
    public function getIndex(){
    	$jobs = Job::join('cities','cities.city_id','=','jobs.city_id');    	
		
    	$jobs = $jobs->orderBy('jobs.approved_on')->get();
    	
    	$values = array();
    	$new = array();
    	// $new = new stdClass();

		foreach ($jobs as $key => $job) {
			$new[$key]['id'] = $job->job_id;
			$new[$key]['title'] = $job->job_title;
			$new[$key]['emp'] = $job->employer->company->cmp_name;
			
			$new[$key]['date'] = Carbon::parse($job->job_created_on)->format('D,d M Y');

			$cityD = array();
	        $cities = City::where('city_id','=',$job->city_id)->get(); 	        
	        foreach($cities as $city)
	        array_push($cityD,$city->city_name);	        
	        $new[$key]['city'] = implode(',', $cityD);


            $skillsD = array();
            $skills = Skill::whereIn('skill_id', explode(",",$job->job_skills))->get();
	        foreach ($skills as $skill)
            array_push($skillsD , $skill->skill_title);          	
          	$new[$key]['skill'] = implode(",", $skillsD);

          	$new[$key]['salary'] = $job->job_salary;
          	$new[$key]['exp'] = $job->exp_years;

          	// $new->id = $id;
          	

          	// array_push($new, $id, $title);
          	// $object = (object)$new;
          	
          	// echo '</br>';
		}
		$values = $new;
		
		print_r(json_encode($values));
		// return $jobs;
    }
}
