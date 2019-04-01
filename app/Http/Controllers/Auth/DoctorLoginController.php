<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class DoctorLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/doctor/dashboard';

    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login_doctor');
    }

    protected function guard()
    {
        return Auth::guard('doctor');
    }
}
