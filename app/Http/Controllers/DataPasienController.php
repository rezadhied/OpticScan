<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePatientRequest;
use App\Models\ModelUser;
use App\Models\PatientReport;
use App\Models\Report;
use App\Models\ReportData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DataPasienController extends Controller
{
    
    public function index()
    {
        return view('datapasien');
    }

    public function store(CreatePatientRequest $request)
    {
        $user = Auth::user();
        // Cari user dengan role 'pasien' berdasarkan patient_phone
        $patientUser = ModelUser::where('phone', $request->patient_phone)->where('role', 'pasien')->first();

        if (!$patientUser) {
            return response()->json(['message' => 'Pasien tidak ditemukan'], 404);
        }

        // Simpan data pasien di table patient_report
        $patientReport = PatientReport::create([
            'patient_id' => $request->patient_id,
            'user_id' => $user->id,
            'report_id' => null, // Sementara kosong, akan diupdate setelah report dibuat
        ]);

        // Simpan data report di table reports
        $report = Report::create([
            'user_id' => $patientUser->id,
            'patient_id' => $patientReport->patient_id,
            'register_date' => $request->register_date,
            'test_status' => 'Sedang Diproses',
            'diagnose' => 'Belum Terdiagnosa',
        ]);

        // Update patient_report dengan report_id yang sudah dibuat
        $patientReport->update(['report_id' => $report->report_id]);

        // Simpan file foto
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');

            ReportData::create([
                'report_id' => $report->report_id,
                'filepath' => $path,
            ]);
        }

        return response()->json(['message' => 'Data pasien berhasil disimpan']);
    }
}
