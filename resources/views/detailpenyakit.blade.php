@extends('layouts.app')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Pasien</title>
</head>
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Detail Pasien</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rounded-lg" style="width: 500px; height: 338px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $report->reportData->filepath) }}" class="img-fluid" style="object-fit: cover; width: 75%; height: 100%;" alt="Foto Mata">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-group">
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Nama Pasien: <span class="font-weight-normal">{{ $report->patient->name }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                No HP Pasien: <span class="font-weight-normal">{{ $report->patient->phone }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Tanggal Registrasi: <span class="font-weight-normal">{{ $report->register_date }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Diagnosa: <span class="font-weight-normal" id="diagnoseText">{{ $report->diagnose }}</span>
                                <input type="text" class="form-control d-none" id="diagnoseInput" name="diagnose" value="{{ $report->diagnose }}" form="updateForm">
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Status Tes: <span class="{{ $report->test_status === 'Test Selesai' ? 'badge bg-success text-white' : 'badge bg-danger text-white' }}">{{ $report->test_status }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Status Verifikasi: <span class="{{ $report->verified === 'Terverifikasi Oleh Dokter' ? 'badge bg-success text-white' : 'badge bg-danger text-white' }}" id="verifiedText">{{ $report->verified }}</span>
                            </div>
                            <hr>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Nama Dokter: <span class="font-weight-normal">{{ $report->doctor->user->name }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Catatan Dokter: <span class="font-weight-normal" id="doctorNoteText">{{ $report->doctor_note }}</span>
                                <textarea class="form-control d-none" id="doctorNoteInput" name="doctor_note" form="updateForm">{{ $report->doctor_note }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ Auth::user()->role === 'dokter' ? route('datapasien.index') : route('infopenyakit') }}">
                    <button class="btn btn-lg btn-primary" style="font-size: 20px; font-weight: 600;">Kembali</button>
                </a>
                @if (Auth::user()->role === 'dokter')
                <button id="editButton" class="btn btn-lg btn-warning" style="font-size: 20px; font-weight: 600;" onclick="toggleEdit()">Edit Riwayat</button>
                <form action="{{ route('report.update', $report->report_id) }}" method="POST" id="updateForm" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-lg btn-success d-none" id="saveChangesButton" style="font-size: 20px; font-weight: 600;">Simpan Perubahan</button>
                </form>
                @if ($report->verified !== 'Terverifikasi Oleh Dokter')
                <form action="{{ route('report.verify', $report->report_id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-lg btn-info" style="font-size: 20px; font-weight: 600;">Verifikasi Diagnosa</button>
                </form>
                @endif
                @endif
            </div>
        </div>
    </div>

    <script>
        function toggleEdit() {
            var diagnoseText = document.getElementById('diagnoseText');
            var diagnoseInput = document.getElementById('diagnoseInput');
            var doctorNoteText = document.getElementById('doctorNoteText');
            var doctorNoteInput = document.getElementById('doctorNoteInput');
            var saveChangesButton = document.getElementById('saveChangesButton');
            var editButton = document.getElementById('editButton');

            diagnoseText.classList.toggle('d-none');
            diagnoseInput.classList.toggle('d-none');
            doctorNoteText.classList.toggle('d-none');
            doctorNoteInput.classList.toggle('d-none');
            saveChangesButton.classList.toggle('d-none');

            if (editButton.textContent.trim() === 'Edit Riwayat') {
                editButton.textContent = 'Batal';
                editButton.classList.remove('btn-warning');
                editButton.classList.add('btn-danger');
            } else {
                editButton.textContent = 'Edit Riwayat';
                editButton.classList.remove('btn-danger');
                editButton.classList.add('btn-warning');
            }
        }
    </script>
@endsection
