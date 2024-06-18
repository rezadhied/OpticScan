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
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DiagnosisController;

class DataPasienController extends Controller
{

    public function index()
    {
        $reports = Report::with(['patient', 'doctor', 'reportData'])->get();
        return view('datapasien', compact('reports'));
    }

    public function create()
    {
        return view('formpasien');
    }

    public function storePatient(CreatePatientRequest $request)
    {
        $user = Auth::user();
        $diagnosisController = new DiagnosisController();

        // Cari user dengan role 'pasien' berdasarkan patient_phone
        $patientUser = ModelUser::where('phone', $request->patient_phone)->where('role', 'pasien')->first();

        if (!$patientUser) {
            return redirect()->back()->withErrors(['patient_phone' => 'Pasien tidak ditemukan']);
        }

        // Simpan data pasien di table patient_report
        $patientReport = PatientReport::create([
            //'patient_id' => $request->patient_id,
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
            'verified' => 'Belum Terverifikasi Dokter',
            'doctor_note' => 'Belum ada catatan dokter',
        ]);

        // Update patient_report dengan report_id yang sudah dibuat
        $patientReport->update(['report_id' => $report->report_id]);

        // Simpan file foto
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');

            $reportData = ReportData::create([
                'report_id' => $report->report_id,
                'filepath' => $path,
            ]);

            $diagnosisController->callDiagnosisAPI($report, $reportData->filepath);
        }

        return redirect('/datapasien')->with('alert', 'Data pasien berhasil disimpan');
    }

    public function show($id)
    {
        $report = Report::with(['patient', 'doctor.user', 'reportData'])
                        ->where('report_id', $id)
                        ->firstOrFail();

        return view('detailpenyakit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'diagnose' => 'required|string',
            'doctor_note' => 'required|string',
        ]);

        $report = Report::findOrFail($id);
        $report->diagnose = $request->input('diagnose');
        $report->doctor_note = $request->input('doctor_note');
        $report->save();

        return redirect()->back()->with('success', 'Riwayat berhasil diperbarui.');
    }

    public function verify($id)
    {
        $report = Report::findOrFail($id);
        $report->verified = 'Terverifikasi Oleh Dokter';
        $report->save();

        return redirect()->back()->with('success', 'Diagnosa berhasil diverifikasi.');
    }
}
