<!-- resources/views/datapasien.blade.php -->

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
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
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
                    <a href="{{ route('patient.create') }}" class="btn btn-primary">
                        <img src="img/add-user.png" alt="Icon" class="button-img">
                        <span class="ms-1 button-text">Tambah Pasien</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function setStatus(status, btnClass) {
            var selectedStatus = document.getElementById('selectedStatus');
            selectedStatus.innerHTML = '<a class="dropdown-item" href="#" onclick="selectStatus(\'' + status + '\', \'' + btnClass + '\')">' + status + '</a>';
        }
        function selectStatus(status, btnClass) {
            var selectedStatus = document.getElementById('selectedStatus');
            selectedStatus.innerHTML = '<button type="button" class="btn ' + btnClass + ' selected-button">' + status + '</button>';
        }
    </script>
</body>
</html>
