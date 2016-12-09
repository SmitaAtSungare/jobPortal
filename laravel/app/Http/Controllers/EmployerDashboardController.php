<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Country;
use App\Models\State;
use App\Models\Job;
use App\models\Company;
use App\models\Employeer;
use App\Models\City;
use App\Models\Detail;
use App\Models\JobType;
use App\Models\JobCategory;
use App\Models\Skill;

class EmployerDashboardController extends Controller
{
    public function getIndex() {
       
       $country = Country::get();
       
	    return view('pages.employer_dashboard')
       ->with([
                'getCountry' => $country,
                'types' => $this->getValue(),
                'category' => $this->get(),
                'skill' => $this->gets()
             ]);    
  	}

    //   public function index(){
  
    //   $result = DB::table('jobs')->paginate(20);
    //    return view('pages.employer_dashboard')->with('co', $result);
       
    // }



    public function getValue(){

      $title =JobType::get();
      return  $title;
    }


  public function get(){
    $category= JobCategory::get();
    return $category;
  }

 public function gets(){
    $skill= Skill::get();
    return $skill;
  }


      public function postedjob(){
      $co = Job::paginate(20); 
      return view('pages.employer_dashboard');
    }



// job type //

// public function getTitle(Request $req){
//       $jobtitle = JobType::where('jt_title','like','%'.$req['data'].'%')
//           ->take(20)
//           ->get();

//       return $jobtitle;
//     }

//  public function getCategory(Request $req){    
//       $jobcategory = JobCategory::where('cat_title','like','%'.$req['data'].'%')
//           ->take(20)
//           ->get();

//       return $jobcategory;
//     }
// public function getSkills($sk){
//       return Skill::where('skill_title','like','%'.$sk.'%')->get();
//     }
    public function getskills(Request $req){    
      $skill = Skill::where('skill_title','like','%'.$req['data'].'%')
          ->take(20)
          ->get();

      return response()->json($skill);
    }



 // public function addSkill(Request $req){      
 //      $data = (object)$req['data'];      
 //      $skill = new Skill();
 //      $skill->skill_title = $data->skill;
 //     // $city->city_state_id = $data->state;      
 //      $skill->save();
 //      $sid = $skill->id;
 //      return \Response::json($sid);      
 //    }

// end job type //





   public function getCities(Request $req){
      $city = City::where('city_name','like','%'.$req['data'].'%')
          ->take(20)
          ->get();

      return $city;
    }
    public function getStates(Request $req){
      
      $states = State::where('state_country_id','=',$req['data'])
          ->get();

      return $states;
    }
    public function addCity(Request $req){      
      $data = (object)$req['data'];      
      $city = new City();
      $city->city_name = $data->city;
      $city->city_state_id = $data->state;      
      $city->save();
      $id = $city->id;
      return \Response::json($id);      
    }





   public function postIndex(Request $request){

    
       $jobtitle = $request['job_title'];
       $description = $request['description'];
       $location = $request['location'];
       $job_title = $request['job_title'];  
       $cat_title = $request['cat_title'];
       $skill_title = $request['skill_title'];
       $job_salary = $request['job_salary'];
        
        $ciId = $request['cityid'];

        //  $country = new Country();
        //  $country->save();
        //  $coId=$country->id;


        // $state = new State();
        // $state->state_country_id = $coId;
        // $state->save();
        // $sId = $state->id;


        // $city =  new City();
        // $ciId = $city->id;


        // $detail = new Detail();

        // $detail->detail_city_id = $ciId;
        // $detail->save();
        // $dId = $detail->id;

       // $company = new Company();
       // $company->detail_id = $dId;
       // $company->save();
       // $cId = $company->id;


      //  $employeer = new Employeer();         
      // // $employeer->emp_name = $empname; 
      //  $employeer->emp_cmp_id = $cId;
      //  $employeer->save();
      //  $eId = $employeer->id;

        $jobtype = new JobType();
        $jobtype->jt_title = $job_title
        $jobtype->save(); 
        $jId=$jobtype->id;
     

        $jobcategory =  new JobCategory();
        $jobcategory->cat_title = $cat_title;
        $jobcategory->job_jt_id = $jId;
        $jobcategory->save();
        $jcId = $jobcategory->id;

        $jobskill = new Skill();
        $jobskill->skill_title = $skill_title;
        $jobskill->skill_job_cat_id=$jcId;
        $jobskill->save();
        $jsId->$jobskill->id;

        $job = new Job();
        $job->job_title = $jobtitle;
        $job->description = $description;
        $job->job_salary = $job_salary;
        $job->job_skill = $jsId;
        $job->save();


     


       // return redirect()->route('pages.employer_dashboard')->with([
       //   'success' => 'Saved!'
       //          ]);
    }


}
