<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaPenggunaController extends Controller
{
    public function index()
    {
        return view('kelolapengguna');
    }
}
