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
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
});

Route::prefix('doctor')->group(function() {
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctor.login');
    Route::post('/login', 'Auth\DoctorLoginController@login');
    Route::post('/logout', 'Auth\DoctorLoginController@logout')->name('doctor.logout');
    Route::get('/dashboard', 'Doctor\DoctorController@index')->name('doctor.dashboard');
});

Route::prefix('patient')->group(function() {
    Route::get('/login', 'Auth\PatientLoginController@showLoginForm')->name('patient.login');
    Route::post('/login', 'Auth\PatientLoginController@login');
    Route::post('/logout', 'Auth\PatientLoginController@logout')->name('patient.logout');
    Route::get('/dashboard', 'Patient\PatientController@index')->name('patient.dashboard');
});
