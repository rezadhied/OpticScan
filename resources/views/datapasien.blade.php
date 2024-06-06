<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    .button-img {
        width: 20px;
        height: auto;
        margin-right: 5px;
        vertical-align: middle;
        transition: filter 1s ease;
    }
    .button-text {
        color: black;
        transition: color 1s ease;
    }
    .btn-primary {
        background-color: transparent;
        border: none;
        transition: background-color 1s ease;
    }
    .btn-primary:hover {
        background-color: rgba(0, 123, 255, 0.75);
        border: 1px solid transparent;
    }
    .btn-primary:not(:hover) {
        background-color: transparent;
    }
    .btn-primary:hover .button-img {
        filter: brightness(0) invert(1);
    }
    .btn-primary:hover .button-text {
        color: white;
    }
    .selected-item {
        color: white;
        background-color: black;
    }
    .btn-danger {
        background-color: red;
    }
    .btn-warning {
        background-color: yellow;
    }
    .btn-success {
        background-color: green;
    }
    </style>
    
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-15">
                <div class="card">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th>Nama Lengkap</th>
                            <th>No HP</th>
                            <th>Tanggal Daftar</th>
                            <th>Diagnosa</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Rizky Pratama</td>
                            <td>7305477760</td>
                            <td>03/12/2024</td>
                            <td>Katarak</td>
                            <td>Follow-Up Examination</td>
                            <td>i</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col mt-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputModal">
                        <img src="img/add-user.png" alt="Icon" class="button-img">
                        <span class="ms-1 button-text">Tambah Pasien</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputModalLabel">Input Data Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form class="row g-4" action="{{ route('pasien.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="col-12 col-sm-6">
                                <div class="mt-4">
                                    <label for="patient_name" class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" id="patient_name" placeholder="Masukkan Nama Lengkap Pasien">
                                </div>
                                <div class="mt-4">
                                    <label for="phone" class="form-label">Nomor HP</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Masukkan Nomor Handphone">
                                </div>
                                <div class="mt-4">
                                    <label for="register_date" class="form-label">Tanggal Daftar</label>
                                    <input type="date" class="form-control" id="register_date">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mt-4">
                                    <label for="patient_id" class="form-label">ID Pasien</label>
                                    <input type="number" class="form-control" id="patient_id" placeholder="Masukkan Nama Anda">
                                  </div>
                                  <div class="mt-4">
                                    <label for="diagnosis_image" class="form-label">Upload Gambar Diagnosa</label>
                                    <input type="file" class="form-control" id="diagnosis_image" name="diagnosis_image">
                                    <p class="text-muted">**Format file yang didukung: jpg, png**</p>
                                  </div>
                            </div>
                        </form>
                        <div class="mt-4">
                            <button class="btn btn-success me-3 w-9" type="submit">Save</button>
                            <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function setStatus(status, btnClass) {
            var selectedStatus = document.getElementById('selectedStatus');
            selectedStatus.innerHTML = '<button type="button" class="btn ' + btnClass + ' selected-item" onclick="selectStatus(\'' + status + '\', \'' + btnClass + '\')">' + status + '</button>'
        }
        function selectStatus(status, btnClass) {
            var selectedStatus = document.getElementById('selectedStatus');
            selectedStatus.innerHTML = '<button type="button" class="btn ' + btnClass + ' selected-item" onclick="selectStatus(\'' + status + '\', \'' + btnClass + '\')">' + status + '</button>'
        }

    </script>
    </body>
</html>
