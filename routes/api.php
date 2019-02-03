<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('doctors','DoctorController');
Route::resource('surgeries','SurgeryController');
Route::resource('patients','PatientController');
Route::resource('citas','CitaController');
Route::post('/cita','CitaController@citaByDia');
Route::post('/login','loginController@login');
Route::post('/checkEmail','loginController@checkEmail');
Route::post('/resetPassword','loginController@resetPassword');
Route::get('/logout','loginController@logout');