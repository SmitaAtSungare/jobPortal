<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getIndex(){    	
    	return view('pages.job_seeker');
    }
    
}
