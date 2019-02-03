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
Route::get('/', function () {
    return View::make('layouts.login');
})->name('login');

Route::get('/checkmail', function () {
	return View::make('layouts.check');
});

Route::get('/resetPassword{email}', 'LoginController@makeView')->name('reset');

//Route::get('/', 'CitaController@index')->name('home');

Route::get('/index', 'CitaController@index')->name('index');

Route::get('/citas', 'CitaController@index')->name('citas');

Route::get('/citas_add/{id}', 'CitaController@datoCita')->name('cita-add');

Route::get('/pacientes', 'PatientController@index')->name('patients');


Route::get('/pacientes_edit/{id}', 'PatientController@show')->name('patients-edit');

Route::get('/pacientes_destroy/{id}', 'PatientController@destroy')->name('patients-destroy');


Route::get('/pacientes_add', function () {
    return View::make('layouts.patients-add');
});


Route::get('/doctores', 'DoctorController@indexUI')->name('doctors');


Route::get('/doctores_edit/{id}', 'DoctorController@showUI')->name('doctors-edit');

Route::get('/doctores_destroy/{id}', 'DoctorController@destroy')->name('doctors-destroy');

Route::get('/doctores_add', function () {
    return View::make('layouts.doctors-add');
});
