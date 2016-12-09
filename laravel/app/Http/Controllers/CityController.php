<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
class CityController extends Controller
{
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
}
