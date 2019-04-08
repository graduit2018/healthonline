<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient.dashboard');
    }
}
