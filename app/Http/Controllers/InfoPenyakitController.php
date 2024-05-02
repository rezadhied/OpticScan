<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoPenyakitController extends Controller
{
    public function index(){
        return view ('infopenyakit');
    }   
}
