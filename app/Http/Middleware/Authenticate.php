<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request, $guard = null)
    {
        if (!$request->expectsJson()) {
            switch ($guard) {
                case 'admin':
                    if (Auth::guard($guard)->check()) {
                        return route('admin.login');
                    }
                    break;
                case 'doctor':
                    if (Auth::guard($guard)->check()) {
                        return route('doctor.login');
                    }
                    break;
                case 'patient':
                    if (Auth::guard($guard)->check()) {
                        return route('patient.login');
                    }
                    break;
                default:
                    if (Auth::guard($guard)->check()) {
                        return route('home');
                    }
                    break;
            }
        }
    }
}
