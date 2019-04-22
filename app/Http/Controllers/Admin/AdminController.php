<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function private()
    {
        return view('admin.private');
    }

    public function users()
    {
        return Admin::all();
    }
}
