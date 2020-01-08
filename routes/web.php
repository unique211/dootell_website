<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('home');
//     // return 123;
// });

Route::resource('/', 'HomeController');


Route::resource('jobseeker', 'JobseekerController');


Route::resource('employees', 'EmployeesController');
Route::get('company_jobs/{id}', 'EmployeesController@company_jobs');

Route::resource('subscriber', 'SubscriberController');


Route::resource('consultancy', 'ConsultancyController');

Route::post('search_jobs', 'HomeController@search_jobs');

Route::get('student_details/{id}', 'HomeController@student_details');

Route::get('job_details/{id}', 'HomeController@job_details');



Route::post('search_student', 'HomeController@search_students');