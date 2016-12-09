<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\City;
use App\Models\Skill;
use Carbon\Carbon;

class JobsController extends Controller
{    
    public function getSearch(Request $req){
    	$data = (object)$req;
    	    	
    	$jobs = Job::join('cities','cities.city_id','=','jobs.city_id');
    	
		if(count($data->day) > 0) { 			
				$current = Carbon::now();
				$date = Carbon::createFromFormat('Y-m-d H:s:i', $current)->subDay(max($data->day));			
				$jobs->where('jobs.approved_on','>=',$date);			
		}

		count($data->type) > 0 ? $jobs->whereIn('jobs.job_cat_id',$data->type) : '';

		if(count($data->salary) > 0) {
			$salary = implode(",", $data->salary);
			$salary = explode(',', $salary);
			
			$max = max($salary)*100000;
			$min = min($salary)*100000;
			
			$jobs->whereBetween('jobs.job_salary',[$min, $max]);
		}

		count($data->location) > 0 ? $jobs->whereIn('jobs.city_id',$data->location) : '';

		if(count($data->education) > 0) {			
			$ids = array();
			foreach (Job::get() as $key => $value) {
				
				$course =  explode(",",$value->job_courses);

				foreach ($course as $c => $val) {
					if(in_array($val, $data->education)){
						if(!in_array($value->job_id, $ids)){
							array_push($ids, $value->job_id);    					
						}
					}    				
				}    			    			
			}    		
			$jobs->whereIn('jobs.job_id',$ids);					
		}

		count($data->industry) > 0 ? $jobs->whereIn('jobs.job_type_id',$data->industry) : '';
    	
    	$jobs = $jobs->orderBy('jobs.approved_on')->get();

    	$values = array();
    	$new = array();
    	// $new = new stdClass();
    	// $d = array('1','2');
		foreach ($jobs as $key => $job) {			
			$new[$key]['id'] = $job->job_id;
			// return response()->json($new[$key]['id']);
			$new[$key]['title'] = $job->job_title;
			$new[$key]['emp'] = $job->employer->company->cmp_name;
			$new[$key]['description'] = $job->description;
			
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
		
    	// return $jobs->orderBy('jobs.approved_on')->get();
    	return response()->json($values);
    	// return json_encode($values);
    }
}
