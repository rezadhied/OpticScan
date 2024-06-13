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
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mb-3">
                    <a href="{{ route('pengguna.create') }}" class="btn btn-primary">
                        <img src="img/add-user.png" alt="Icon" class="button-img">
                        <span class="ms-1 button-text">Tambah Pengguna</span>
                    </a>
                </div>          
                <div class="card">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Birthdate</th>
                                <th>Role</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->birthdate }}</td>
                                <td>{{ ucfirst($user->role) }}</td>
                                <td>
                                    <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-outline-primary rounded-lg btnEdit btn-action">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <button class="btn btn-danger rounded-lg btn-action" data-bs-toggle="modal" data-bs-target="#myModal_{{ $user->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                             <!-- Modal HTML -->
                            <div class="modal fade" id="myModal_{{ $user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel_{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel_{{ $user->id }}">Konfirmasi Hapus Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data ini?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal HTML -->
                            @endforeach
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
