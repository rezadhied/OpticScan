<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ReportData;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DiagnosisController extends Controller
{   

    public function callDiagnosisAPI(Report $report, $filepath)
    {
        $file = Storage::disk('public')->path($filepath);
        \Log::info('Attempting to call Ngrok API.');
    
        try {
            $response = Http::withOptions(['verify' => false])
                            ->attach('file', fopen($file, 'r'))
                            ->post('https://dca8-103-233-100-236.ngrok-free.app/predict');
        
            \Log::info('Ngrok API response:', ['response' => $response->body()]);
        
            if ($response->successful()) {
                $data = $response->json();
                $predictedClass = $data['predicted_class'] ?? 'Tidak diketahui';
        
                $report->update([
                    'diagnose' => $predictedClass,
                    'test_status' => 'Test Selesai',
                ]);
            } else {
                \Log::error('Failed to get a successful response from diagnosis API.', ['response' => $response->body()]);
            }
        } catch (\Exception $e) {
            \Log::error('Error while calling diagnosis API.', ['error' => $e->getMessage()]);
        }
    }
    

    public function diagnoseExistingPatients()
    {
        $reports = Report::with('reportData')->where('diagnose', 'Belum Terdiagnosa')->get();

        if ($reports->isEmpty()) {
            return redirect('/datapasien')->with('alert', 'Tidak ada pasien yang perlu didiagnosa');
        }

        foreach ($reports as $report) {
            $reportData = $report->reportData;

            if ($reportData) {
                $this->callDiagnosisAPI($report, $reportData->filepath);
            }
        }

        return redirect('/datapasien')->with('alert', 'Diagnosis berhasil diperbarui untuk semua pasien yang belum terdiagnosa');
    }
}
