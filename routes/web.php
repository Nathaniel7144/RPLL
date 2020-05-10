<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home',function(){
    return view('home');
});
Route::get('/login',function(){
    return view('login');
});


// Functional API

Route::post('/login-email', 'LoginController@getUserFromEmail');
Route::post('/login-pass', 'LoginController@authenticateUser');

//medrec
Route::get('/testmed/MedicalRecord','MedicalRecordController@index');
Route::get('/testmed/createmedrec','MedicalRecordController@create');
Route::post('/testmed/MedicalRecord','MedicalRecordController@store');
Route::get('/testmed/{med}/edit','MedicalRecordController@edit');
Route::patch('/testmed/{med}','MedicalRecordController@update');

//patient
Route::get('/testpat/Patient','PatientController@index');
Route::get('/testpat/createPatient','PatientController@create');
Route::post('/testpat/Patient','PatientController@store');
// Route::get('/testpat/Patient','PatientControlle@edit');
// Route::patch('/testmed/{med}','MedicalRecordController@update');

//person
Route::get('/testper/Person','PersonController@index');
Route::get('/testper/createPerson','PersonController@create');
Route::post('/testper/Person','PersonController@store');
Route::get('/testper/{per}/testper/editPerson','PersonController@edit');
Route::patch('/testper/{per}','PersonController@update');