@extends('layouts.app')

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
                                Tanggal Lahir: <span class="font-weight-normal">{{ $report->patient->birthdate }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Nama Dokter: <span class="font-weight-normal">{{ $report->doctor->user->name }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Tanggal Registrasi: <span class="font-weight-normal">{{ $report->register_date }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Status Tes: <span class="badge bg-danger text-white">{{ $report->test_status }}</span>
                            </div>
                            <div class="list-group-item border border-dark rounded-lg mb-2">
                                Diagnosa: <span class="font-weight-normal">{{ $report->diagnose }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ Auth::user()->role === 'dokter' ? route('datapasien.index') : route('infopenyakit') }}">
                    <button class="btn btn-lg btn-primary" style="font-size: 20px; font-weight: 600;">Kembali</button>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
