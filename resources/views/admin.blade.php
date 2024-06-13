<!-- resources/views/datapasien.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        .btnEdit {
            color: blue;
            border-color: blue; 
        }
        .btnEdit:hover {
            background-color: blue; 
            color: white; 
        }
        .btn-action {
            margin-right: 5px; /* Adjust the spacing between buttons */
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-15">
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('formPengguna.index') }}" class="btn btn-primary">
                    <img src="img/add-user.png" alt="Icon" class="button-img">
                    <span class="ms-1 button-text">Tambah Pengguna</span>
                </a>
            </div>          
            <div class="card">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Birthdate</th>
                            <th>Role</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>kiki11</td>
                            <td>Rizky Pratama</td>
                            <td>Rizky11@gmail.com</td>
                            <td>7305477760</td>
                            <td>03/11/1995</td>
                            <td>Pasien</td>
                            <td>
                                <button class="btn btn-outline-primary rounded-lg btnEdit btn-action" onclick="location.href='{{ route('editPengguna.index') }}'">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-danger rounded-lg btn-action" onclick="confirmDelete()">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function confirmDelete() {
        if (confirm("Apakah Anda yakin menghapus akun ini?")) {
            
        }
    }
</script>
</body>
</html>
