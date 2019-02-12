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

Route::get('/index/{id}', 'CitaController@index')->name('index');


Route::get('/citas_add/{id}', 'CitaController@datoCita')->name('cita-add');


Route::get('/pacientes/{id}', 'PatientController@index')->name('patients');


Route::get('/pacientes_edit/{id}', 'PatientController@show')->name('patients-show');




Route::get('/pacientes_add', function () {
    return View::make('layouts.patients-add');
});


//Admin routes

Route::get('/admin', function () {
    return View::make('layouts.login-admin');
})->name('login-admin');

Route::get('/admin/{id}', 'CitaController@indexAdmin')->name('admin');
Route::get('/admin/citas_add/{id}', 'CitaController@adatoCita')->name('acita-add');
Route::get('/admin/citas_destroy/{date}/{id}/{id_doc}', 'CitaController@Adestroy')->name('Acita-destroy');
Route::get('/pacientes_destroy/{id}/{id_doc}', 'PatientController@destroy')->name('patients-destroy');
Route::get('/pacientes_edit/{id}/{id_doc}', 'PatientController@showAdmin')->name('a-patients-show');
Route::get('/observations/{$id}/{id_doc}','ObservationController@index')->name('show-observation');
Route::get('/doctores/{id}', 'DoctorController@indexUI')->name('doctors');
Route::get('/doctores_edit/{id}', 'DoctorController@showUI')->name('doctors-edit');
Route::get('/doctores_destroy/{id}', 'DoctorController@destroy')->name('doctors-destroy');

Route::get('/doctores_add/{id}', function () {
    return View::make('layouts.doctors-add');
});
