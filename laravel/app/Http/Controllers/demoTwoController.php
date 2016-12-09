<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoTwoController extends Controller
{
    public function getIndex(){
    	return (new demoController)->getIndex();
    }
}
