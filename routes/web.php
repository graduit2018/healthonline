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

Route::get('home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
});

Route::prefix('doctor')->group(function() {
    Route::get('login', 'Doctor\Auth\LoginController@showLoginForm')->name('doctor.login');
    Route::post('login', 'Doctor\Auth\LoginController@login');
    Route::post('logout', 'Doctor\Auth\LoginController@logout')->name('doctor.logout');
    Route::get('dashboard', 'Doctor\DoctorController@index')->name('doctor.dashboard');
});

Route::prefix('patient')->group(function() {
    Route::get('login', 'Patient\Auth\LoginController@showLoginForm')->name('patient.login');
    Route::post('login', 'Patient\Auth\LoginController@login');
    Route::post('logout', 'Patient\Auth\LoginController@logout')->name('patient.logout');
    Route::get('dashboard', 'Patient\PatientController@index')->name('patient.dashboard');
});
