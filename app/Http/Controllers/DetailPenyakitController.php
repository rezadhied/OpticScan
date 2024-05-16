<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPenyakitController extends Controller
{
    public function index(){
        return view ('detailpenyakit');
    }   
}
