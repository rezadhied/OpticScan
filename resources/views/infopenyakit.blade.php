@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="font-weight-bold" style="font-size: 2    .5rem;">Riwayat Saya</h1>
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
                                <th scope="col">#</th>
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
                                    No Hp
                                    <button class="btn btn-link btn-sort" data-sort="phone">
                                        <i class="fas fa-sort text-primary"></i>
                                    </button>
                                </th>
                                <th scope="col">
                                    Dokter
                                    <button class="btn btn-link btn-sort" data-sort="doctor">
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
                                <th scope="col">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Rizy Pratama</td>
                                <td>Katarak</td>
                                <td>7305477760</td>
                                <td>Dr. Aditya Wardhana</td>
                                <td>03/12/2024</td>
                                <td>
                                    <span class="badge bg-danger text-white">Pemeriksaan Lanjutan</span>
                                </td>
                                <td>
                                    <a href="{{ route('detailpenyakit') }}" class="btn btn-primary rounded-lg"><i
                                            class="far fa-clipboard"></i></a>&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rizy Pratama</td>
                                <td>Katarak</td>
                                <td>7305477760</td>
                                <td>Dr. Cindy Pratiwi</td>
                                <td>15/01/2024</td>
                                <td>
                                    <span class="badge bg-warning text-white">Perawatan Lanjutan</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary rounded-lg"><i
                                            class="far fa-clipboard"></i></button>&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Rizy Pratama</td>
                                <td>Glaukoma</td>
                                <td>7305477760</td>
                                <td>Dr. Cindy Pratiwi</td>
                                <td>24/07/2022</td>
                                <td>
                                    <span class="badge bg-success text-white">Pulih</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary rounded-lg"><i
                                            class="far fa-clipboard"></i></button>&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Rizy Pratama</td>
                                <td>Glaukoma</td>
                                <td>7305477760</td>
                                <td>Dr. Dian Anggraini</td>
                                <td>08/12/2021</td>
                                <td>
                                    <span class="badge bg-warning text-white">Perawatan Lanjutan</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary rounded-lg"><i
                                            class="far fa-clipboard"></i></button>&nbsp;&nbsp;
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Rizy Pratama</td>
                                <td>Ambylopia</td>
                                <td>7305477760</td>
                                <td>Dr. Rini Putri</td>
                                <td>18/04/2020</td>
                                <td>
                                    <span class="badge bg-success text-white">Pulih</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary rounded-lg"><i
                                            class="far fa-clipboard"></i></button>&nbsp;&nbsp;
                                </td>
                            </tr>
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
