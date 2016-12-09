<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\File;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Detail;
use App\Models\City;
use App\Models\Company;
use App\Models\Employer;
use App\Models\State;
use App\Models\Country;


class EmployerController extends Controller
{
    public function getIndex() {
      $country = Country::get();
	    return view('pages.employer')
       ->with([
                'getCountry' => $country           
             ]);
	}

  public function get(){
    return view('pages.employer_dashboard');
  }

// company //

    public function getCompany() {
      $company = Company::get();
      return view('pages.employer',['companies' => $company]);
  }

public function getCompanies(Request $request){
      $company = Company::where('cmp_name','like','%'.$request['data'].'%')
          ->take(20)
          ->get();

      return $company;
    }
    public function addCompany(Request $requesr){      
      $data = (object)$request['data'];
      
      $company = new Company();
      $company->cmp_name = $data->company;
       
      $c->save();
      $id = $c->id;
      
      return \Response::json($id);      
    } 
// // // 




//city//

   
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




// // // 




  public function save(Request $request){

    // $this -> validate($request, [

  
    //       'cmp_name' => 'required|max:50',
    //       'detail_address' =>'required|unique|max:255',
    //       'email' => 'required|email|unique:details', 
    //       'emp_password' =>'required',
    //       'mobile' => 'required',
    //       'landline' =>'required',
    //       'emp_name' => 'required|max:50'
    //   ]);



        $cmp_name = $request['cmp_name'];
        $address = $request['address'];
        $email = $request['email'];
        $emp_password= $request['emp_password'];
        // $cpassword= $cpassword['cpassword'];
        $mobile = $request['mobile'];
        $landline = $request['landline'];
        $emp_name = $request['emp_name'];
      

        $detail = new Detail();
        $detail->address = $address;
        $detail->email = $email;
        $detail->mobile = $mobile;
        $detail->landline =$landline;
        $detail->save();
        $dId = $detail->id;

       $company = new Company();
       $company->cmp_name = $cmp_name;
       $company->detail_id = $dId;
       $company->save();
       $cId = $company->id;

       $employer = new Employer();
       $employer->emp_name = $emp_name;
       $employer->emp_password = $emp_password;
       // $employer->cpassword = $cpassword;
       $employer->emp_cmp_id = $cId;
       $employer->save();
       $eId = $employer->id;

      // Auth::login($employer);

     

        return redirect()->route('employer')->with([
         'success' => 'Saved!'
                ]);
    }
}

  // public function signin(Request $request)
  // {
  //      $this->validate($request, [
  //           'emp_name' => 'required',-
  //           'emp_password' => 'required'
  //       ]);

  //       if(Auth::attempt(['emp_name' => $request['emp_name'],'emp_password' => $request['emp_password']]))
  //    {
  //       return redirect()->route('employer_dashboard');
  //     }
  //     return redirect()->back('');
  // }






