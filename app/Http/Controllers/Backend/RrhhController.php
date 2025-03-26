<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RrhhController extends Controller
{
        /* Creamos la vista */
        public function dashboard(){
            return view('rrhh.dashboard');
        }
}
