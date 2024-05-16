<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDataPasien extends Controller
{
    public function index(){
        return view('DataInput'); 
    } 
}
