<?php

namespace BasicLaravel\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BasicLaravel\Models\User;
use BasicLaravel\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
