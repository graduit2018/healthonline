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
});

Route::prefix('admin')->middleware('auth:admin')->group(function() {
    Route::get('dashboard', 'Admin\AdminController@index')->name('admin.dashboard');
});

Route::prefix('doctor')->group(function() {
    Route::get('login', 'Doctor\Auth\LoginController@showLoginForm')->name('doctor.login');
    Route::post('login', 'Doctor\Auth\LoginController@login');
    Route::post('logout', 'Doctor\Auth\LoginController@logout')->name('doctor.logout');
});

Route::prefix('doctor')->middleware('auth:doctor')->group(function() {
    Route::get('dashboard', 'Doctor\DoctorController@index')->name('doctor.dashboard');
});

Route::prefix('patient')->group(function() {
    Route::get('login', 'Patient\Auth\LoginController@showLoginForm')->name('patient.login');
    Route::post('login', 'Patient\Auth\LoginController@login');
    Route::post('logout', 'Patient\Auth\LoginController@logout')->name('patient.logout');
    Route::post('password/email', 'Patient\Auth\ForgotPasswordController@sendResetLinkEmail')->name('patient.password.email');
    Route::get('password/reset', 'Patient\Auth\ForgotPasswordController@showLinkRequestForm')->name('patient.password.request');
    Route::post('password/reset', 'Patient\Auth\ResetPasswordController@reset')->name('patient.password.update');
    Route::get('password/reset/{token}', 'Patient\Auth\ResetPasswordController@showResetForm')->name('patient.password.reset');
    Route::get('register', 'Patient\Auth\RegisterController@showRegistrationForm')->name('patient.register');
    Route::post('register', 'Patient\Auth\RegisterController@register');
});

Route::prefix('patient')->middleware('auth:patient')->group(function() {
    Route::get('dashboard', 'Patient\PatientController@index')->name('patient.dashboard');
});

Route::get('messages', 'Admin\MessageController@fetchMessages');
Route::post('messages', 'Admin\MessageController@sendMessage');

Broadcast::routes(['middleware' => ['auth:admin']]);
