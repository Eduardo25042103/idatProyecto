<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /* Creamos la vista del Dashboard */
    public function dashboard() {
        return view('admin.dashboard');
    }

    /* Creamos la vista del login */
    public function login() {
        return view('admin.auth.login');
    }
}
