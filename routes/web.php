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
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login');
    Route::get('/home', 'Admin\AdminController@index')->name('admin.home');
});

Route::prefix('doctor')->group(function() {
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
    Route::post('/login', 'Auth\DoctorLoginController@login');
    Route::get('/home', 'Doctor\DoctorController@index')->name('doctor.home');
});

Route::prefix('patient')->group(function() {
    Route::get('/login', 'Auth\PatientLoginController@showLoginForm')->name('patient.login');
    Route::post('/login', 'Auth\PatientLoginController@login');
    Route::get('/home', 'Patient\PatientController@index')->name('patient.home');
});
