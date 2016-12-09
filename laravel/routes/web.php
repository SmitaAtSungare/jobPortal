<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses' => 'HomeController@getIndex',
	'as' => 'Home'
	]);

Route::get('/profile/', [
	'uses' => 'ProfileController@getIndex',
	'as' => 'profile'
	]);

// Route::get('/jobs/{name?}-{d?}-{e?}', [
// 	'uses'=>'JobsController@getIndex',
// 	'as'=>'chirag'
// 	]);

Route::get('/employer/', [
	'uses' => 'EmployerController@getIndex',
	'as' => 'employer'
	]);

Route::get('/employer_dashboard/', [
	'uses' => 'EmployerDashboardController@getIndex',
	'as' => 'eDashboard'
	]);

Route::post('/getresult', [
	'uses' => 'SearchController@getValues',
	'as' => 'getresult'
	]);

Route::get('/search',[
    'uses' => 'SearchController@getSearch',
    'as' => 'search'
]);


Route::get('/job/search/{skill?}/{location?}/{exp?}', [
	'uses'=>'SearchController@getSearch',
	'as'=>'jobsearch'
	]);

Route::get('/job/', [
	'uses'=>'SearchController@getIndex',
	'as'=>'jobindex'
	]);


Route::post('/getcities',[
	'uses' => 'CityController@getCities',
	'as' => 'cities'
	]);

Route::post('/getstates',[
	'uses' => 'CityController@getStates',
	'as' => 'state'
	]);

Route::post('/addcity',[
	'uses' => 'CityController@addCity',
	'as' => 'addcity'
	]);

Route::get('get',[
	'uses' => 'demoTwoController@getIndex',
	'as' => 'get'
	]);

Route::post('/sidebar',[
	'uses' => 'JobsController@getSearch',
	'as' => 'sidebar'
	]);

//Job Seekers Routes By Smita Starts

Route::get('/profile/', [
    'uses' => 'JobSeekerController@getIndex',
    'as' => 'jobseeker'
]);
Route::post('/city_action',[
    'uses' => 'JobSeekerController@postLoadCityNiceAction',
    'as' => 'city_action'
]);
Route::post('/company_action',[
    'uses' => 'JobSeekerController@postLoadCompanyNiceAction',
    'as' => 'company_action'
]);
Route::post('/university_action',[
    'uses' => 'JobSeekerController@postLoadUniversityNiceAction',
    'as' => 'university_action'
]);
Route::post('/skills_action',[
    'uses' => 'JobSeekerController@postLoadSkillNiceAction',
    'as' => 'skills_action'
]);
Route::post('/languages_action',[
    'uses' => 'JobSeekerController@postLoadLanguageNiceAction',
    'as' => 'languages_action'
]);
Route::post('/designation_action',[
    'uses' => 'JobSeekerController@postLoadDesignationNiceAction',
    'as' => 'designation_action'
]);
Route::post('/courses_action',[
    'uses' => 'JobSeekerController@postLoadCourseNiceAction',
    'as' => 'courses_action'
]);
Route::post('/institutes_action',[
    'uses' => 'JobSeekerController@postLoadInstituteNiceAction',
    'as' => 'institutes_action'
]);
Route::post('/addseeker_action',[
    'uses' => 'JobSeekerController@postInsertNiceAction',
    'as' => 'addseeker_action'
]);

//Job Seekers Routes End

