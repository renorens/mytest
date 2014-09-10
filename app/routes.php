<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('setLocal/{lang}', function($lang){
	App::setlocale($lang);
	return Redirect::to('/');
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('admin', function(){
	return View::make('admin');
});

// static pages
Route::get('services', function(){
	return View::make('static.services');
});
Route::get('plans', function(){
	return View::make('static.plans');
});
Route::get('healthTips', function(){
	return View::make('static.healthTips');
});
Route::get('contact', function(){
	return View::make('static.contact');
});

Route::get('login', function(){
	return View::make('Users.login');
});

Route::get('patients/create', 'PatientsController@create');
// Route::post('patients/store', 'PatientsController@store');
Route::post('patients/store', function(){
	dd('wer');
});

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
// Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

// clinics
Route::get('clinics/create', 'ClinicsController@create');
Route::post('clinics/store', 'ClinicsController@store');
Route::get('clinics/index', 'ClinicsController@index');
Route::get('myClinic', 'ClinicsController@showMyClinic');

// appointments
Route::get('appointment/create/{clinic_id}', 'AppointmentsController@create');

Route::get('test', function(){
return View::make('static.test');
});

