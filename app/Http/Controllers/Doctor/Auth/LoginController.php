<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/doctor/dashboard';

    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('doctor.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('doctor');
    }
}
