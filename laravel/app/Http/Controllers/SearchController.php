<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\City;
use App\Models\Job;
use App\Models\JobType;
use App\Models\Course;
use App\Models\JobCategory;

class SearchController extends Controller
{	    
    // Finding distinct cities by job posted
    public function getCities(){
        // $sidecities = City::distinct('cities.city_id')->join('jobs','cities.city_id', '=', 'jobs.city_id')->select(['cities.city_id','cities.city_name'])->get();
        $cities = City::where('city_priority','=','1')
                ->orderBy('city_name')
                ->get();
        return $cities;
    }
    // Finding Industry
    public function getIndustry(){
        $industry = JobType::get();
        return $industry;
    }
    // Fetching all Degrees
    public function getCourses(){
        $courses = Course::get();            
        
        return $courses;
    }
    // Fetching Job Types
    public function getType(){
        $type = JobCategory::get();
        return $type;
    }
    public function getIndex(){
        $jobs = Job::get();            
        
        return view('pages.job_list')->with(['jobs'=>$jobs, 'sideCities' => $this->getCities()]);
    }

    public function getValues(Request $req){
    	if($req['for'] === 'skills'){
    		$skills = Skill::where('skill_title','like','%'.$req['data'].'%')
    			->take(20)
    			->get();    		   
    			return $skills;    		
    	}   
    	if($req['for'] === 'location'){
    		$city = City::where('city_name','like','%'.$req['data'].'%')
	    		->take(20)
	    		->get();

    		return $city;	    		
    	}   
    	// if($req['for'] === 'exp'){
    	// 	$skills = Skill::where('skill_title','like','%'.$req['data'].'%')->get();    	
    	// 	return $skills;
    	// }
    	return false;
    }

    public function getSearch($skill = null,$location =null ,$exp =null){   
        $params = array ( $skill , $location , $exp );
        $skill = $city = $exp = null;

        foreach ( $params as $p ){
            if ( $p && preg_match ( '/(Skill-|skill-)(.*)\-([0-9])/' , $p ) ) { 
                $skill = explode('-',$p); 
                $skill = end($skill);
            }elseif ( $p && preg_match ( '/(City-|city-)(.*)\-([0-9])/' , $p ) ){ 
                $city = explode('-',$p); 
                $city = end($city);
            }elseif ( $p && preg_match ( '/(Exp-|exp)(.*)\-([a-zA-Z0-9])/' , $p ) ){ 
                $exp = explode('-',$p); 
                $exp = end($exp);
            }
        }        
        
        $exp == 'Fresher' ? $exp = 0 : $exp;
        $jobs = Job::join('cities','cities.city_id','=','jobs.city_id');
        // print_r($jobs);
        if($skill !== '' && $skill !== null){          
            if($city !== '' && $city !== null){  
                if($exp !== '' && $exp !== null){
                    $jobs->where([
                            ['jobs.city_id','=',$city],
                            ['jobs.job_skills','like','%'.$skill.',%'],
                            ['jobs.exp_years','=',$exp]
                        ])->whereOr('jobs.job_skills','like',$skill);
                }else{  
                    $jobs->where([
                            ['jobs.city_id','=',$city],
                            ['jobs.job_skills','like','%'.$skill.',%']
                        ]);
                }
            }else{  
                if($exp !== '' && $exp !== null){
                    $jobs->where([
                            ['jobs.job_skills','like','%'.$skill.',%'],
                            ['jobs.exp_years','=',$exp]
                        ]);
                }else{
                    $jobs->where('jobs.job_skills','like','%'.$skill.',%');
                }
            }
        }else{            
            if($city !== '' && $city !== null){ 
                if($exp !== '' && $exp !== null){ 
                    $jobs->where([
                            ['jobs.city_id','=',$city],                            
                            ['jobs.exp_years','=',$exp]
                        ]);
                }else{
                    $jobs->where('jobs.city_id','=',$city);
                }                
            }else{ 
                if($exp !== '' && $exp !== null){
                    $chk = 's2L2E1';                                        
                    $jobs->where('jobs.exp_years','=',$exp);                    
                }                
            }
        }

        $jobs = $jobs->get();        
        // print_r($exp.$skill.$city);
        return view('pages.job_list')
                ->with([
                    'jobs' => $jobs,
                    'sideCities' => $this->getCities(),
                    'industries' => $this->getIndustry(),
                    'courses' => $this->getCourses(),
                    'types' => $this->getType()
                    ]);
        // // return json_encode($exp);
        // return $skill;
    }
}
