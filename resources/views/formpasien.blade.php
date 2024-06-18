<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Input Data Pasien</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="row g-4" action="{{ route('patient.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-sm-6">
                                <div class="mt-4">
                                    <label for="patient_phone" class="form-label">Nomor HP Pasien</label>
                                    <input type="text" class="form-control" id="patient_phone" name="patient_phone" placeholder="Masukkan Nomor Handphone" required>
                                </div>
                                <div class="mt-4">
                                    <label for="register_date" class="form-label">Tanggal Daftar</label>
                                    <input type="date" class="form-control" id="register_date" name="register_date" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mt-4">
                                    <label for="photo" class="form-label">Upload Gambar Diagnosa</label>
                                    <input type="file" class="form-control" id="photo" name="photo" required onchange="previewImage(event)">
                                    <p class="text-muted">**Format file yang didukung: jpg, png**</p>
                                </div>
                                
                            <div class="col-12 mt-4">
                                <img id="imagePreview" src="#" alt="Preview Image" style="display: none; max-height: 200px;">
                            </div>
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-success me-3 w-9" type="submit">Simpan</button>
                                <a href="{{ route('datapasien.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
