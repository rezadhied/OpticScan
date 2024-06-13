@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PROFILE</title>
</head>

<body style="background-color: #54698e;">
    <h1 style="font-weight: bolder; font-size: 50px; color:white; margin-left: 190px; padding-top: 20px;">Profile</h1>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Card for Profile Image -->
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body text-center">
                        <div class="position-relative">
                            <img src="/img/profile2.jpg" class="rounded-circle bg-secondary"
                                style="width: 100%; height: auto;" alt="Random Image">
                            <button class="btn btn-outline-dark position-absolute top-50 start-100 translate-middle"
                                style="width: 50px; height: 50px; top: 75%;"><i class="fas fa-edit"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card for Profile Data -->
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Profile Data</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap"
                                        value="Rizky Pratama" disabled>
                                    <button class="btn btn-outline-dark mt-2" type="button"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputGender" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputGender" value="Laki-laki" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Alamat Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Alamat Email"
                                        value="rizkypratama@gmail.com" disabled>
                                    <button class="btn btn-outline-dark mt-2" type="button"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputTelepon" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Nomor Telepon</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputTelepon" placeholder="Nomor Telepon"
                                        value="0898983682312" disabled>
                                    <button class="btn btn-outline-dark mt-2" type="button"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputDOB" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="inputDOB" value="1994-03-27" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputRole" class="col-sm-4 col-form-label text-end"
                                    style="font-size: medium; font-weight: bold">Role</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputRole" value="Pasien" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-end">
                                    <button class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
@endsection
