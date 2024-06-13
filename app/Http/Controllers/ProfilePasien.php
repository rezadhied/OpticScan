<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePasienController extends Controller
{
    public function index(){
        return view ('profilepasien');
    }   
}
