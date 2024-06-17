<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Tentang Kami</title>
</head>
@extends('layouts.app')

@section('content')

<body>
    <div class="container mt-5">
        <div style="position: relative;">
            <img src="/img/tkami.jpg" class="w-100" style="height: 560px; border-radius: 20px;">
            <div class="container-fluid" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <h1 style="font-weight: bolder; font-size: 60px;">
                    Tentang OpticScan
                </h1>
                <h5 style="font-weight: lighter; font-size: 30px;">
                    Jaga Matamu, Langkah Awal Menuju Kesehatan Prima!
                </h5>
            </div>
        </div><br><br>

        <div class="container text-center">
            <h1 style="color: #132768; font-size: 70px;">Siapa Kami</h1>
            <span><img src="/img/team.jpg" class="img-fluid rounded" style="width: 600px; height: 400px;" alt=""></span>
            <p style="font-size: 20px;">OpticScan adalah solusi inovatif yang menggunakan teknologi IoT dan AI untuk deteksi dini penyakit mata. Dengan visi menciptakan dunia yang lebih sehat, OpticScan menyediakan solusi terjangkau dan mudah diakses bagi masyarakat dan fasilitas kesehatan.</p>
        </div><br><br><br><br><br><br>

        <div class="container text-center">
            <h1 style="font-size: 70px; color: #132768;">Visi dan Misi</h1><br><br>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="/img/visi.jpg" class="img-fluid rounded" style="height: 300px; width: 100%; object-fit: cover;" alt="">
                </div>                                   
                <div class="col-md-6 order-md-1">
                    <h3 style="text-align: justify; font-size: 50px; color: #132768;">Visi</h3>
                    <p class="nav-item active" style="border-bottom: 3px solid #132768; width: 100px;"></p>
                    <p style="font-size: 20px; text-align: justify;" class="col-md-11 d-md-block p-0">
                        Menjadi solusi terdepan dalam deteksi dini penyakit mata melalui teknologi pemantauan yang inovatif, menciptakan dunia yang lebih sehat dan aman.
                    </p>
                </div>
            </div><br><br><br><br><br>
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="/img/misi.jpg" class="img-fluid rounded" style="height: 300px; width: 100%; object-fit: cover;" alt="">
                </div>                                   
                <div class="col-md-6 order-md-2">
                    <h3 style="text-align: justify; font-size: 50px; color: #132768;">Misi</h3>
                    <p class="nav-item active" style="border-bottom: 3px solid #132768; width: 100px;"></p>
                    <p style="font-size: 20px; text-align: justify;" class="col-md-12 d-md-block p-0">
                        Mengembangkan sistem berbasis IoT dan algoritma kecerdasan buatan untuk memantau dan menganalisis faktor-faktor yang berkaitan dengan penyakit mata, serta menyediakan solusi yang terjangkau dan mudah diakses bagi masyarakat umum dan fasilitas kesehatan.
                    </p>
                </div>
            </div>
        </div><br><br><br>
    </div>
    @endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

