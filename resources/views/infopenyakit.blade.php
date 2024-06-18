
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Riwayat Saya</title>
</head>

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="font-weight-bold" style="font-size: 2.5rem;">Riwayat Saya</h1>
                <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                    <form class="form-inline">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search text-dark"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">NO
                                    <button class="btn btn-link btn-sort" data-sort="name">
                                            <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">
                                    Nama
                                    <button class="btn btn-link btn-sort" data-sort="name">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">
                                    Diagnosa
                                    <button class="btn btn-link btn-sort" data-sort="diagnose">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">
                                    Tanggal Daftar
                                    <button class="btn btn-link btn-sort" data-sort="date">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">
                                    Status
                                    <button class="btn btn-link btn-sort" data-sort="status">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">Aksi
                                    <button class="btn btn-link btn-sort" data-sort="name">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $report->patient->name }}</td>
                                    <td>{{ $report->diagnose }}</td>
                                    <td>{{ $report->register_date }}</td>
                                    <td>
                                        @if($report->test_status == 'Sedang Diproses')
                                            <span class="badge bg-danger text-white">{{ $report->test_status }}</span>
                                        @else
                                            <span class="badge bg-success text-white">{{ $report->test_status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('infopenyakit.show', $report->report_id) }}" class="btn btn-primary rounded-lg">
                                            <i class="far fa-clipboard"></i>
                                        </a>&nbsp;&nbsp;
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Kembali</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
