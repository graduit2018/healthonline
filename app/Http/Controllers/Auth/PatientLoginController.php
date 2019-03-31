<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PatientLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/patient/dashboard';

    public function __construct()
    {
        $this->middleware('guest:patient')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login_patient');
    }

    protected function guard()
    {
        return Auth::guard('patient');
    }
}