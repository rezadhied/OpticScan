<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class InfoPenyakitController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reports = Report::with(['patient', 'doctor.user'])
                        ->where('user_id', $user->id)
                        ->get();

        return view('infopenyakit', compact('reports'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $report = Report::with(['patient', 'doctor.user', 'reportData'])
                        ->where('user_id', $user->id)
                        ->where('report_id', $id)
                        ->firstOrFail();

        return view('detailpenyakit', compact('report'));
    }
}
