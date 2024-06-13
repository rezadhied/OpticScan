@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>DASHBOARD</title>
</head>
<body>
<div class="container-fluid mt-5 p-4 rounded-lg" style="background-color: #132768; border-radius: 20px;">
    <div class="row">
        <div class="col-md-6 order-md-2 d-flex justify-content-center align-items-center">
            <img src="/img/mata.png" style="width: 100%; max-width: 250px;">
        </div>
        <div class="col-md-6 order-md-1" style="margin-top: 20px;">
            <h1 style="font-weight: bolder; font-size: 30px; color: white;" class="mb-5">
                Perjalanan Anda Menuju Visi yang Lebih Baik Dimulai Sekarang
            </h1>
            <h5 style="color: white; font-weight: lighter; font-size: 15px;">
                Selamat datang di OpticScan. Dengan teknologi canggih dan perawatan yang dipersonalisasi. Kami
                menawarkan pemeriksaan mata yang tepat dan solusi yang disesuaikan. Temukan kejelasan dan
                kepercayaan diri dengan OpticScan hari ini.
            </h5>
            <div class="d-flex justify-content-start">
                <a href="{{ route('infopenyakit') }}">
                    <button type="button" class="btn btn-primary" style="background-color: #081445; color: white; font-size: 20px; font-weight: 600; margin-top: 20px;">
                        Lihat Riwayat
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid h-auto w-auto p-2" style="background-color: #2a4499; margin-top: 100px; border-radius: 50px;">
    <div class="row">
        <div class="col text-center text-white" style="padding: 50px;">
            <h1 style="font-weight: bolder; font-size: 25px;">Deteksi Dini untuk Penyakit Mata (OpticScan)</h1>
            <h5 style="font-weight: lighter; font-size: 15px;">OpticScan merupakan aplikasi terintegrasi dengan AI
                untuk mendeteksi penyakit mata.</h5>
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <a href="{{ route('tkami') }}">
                    <button type="button" class="btn btn-primary" style="background-color: #D9D9D9; color: #132768; font-size: 20px; font-weight: 600; margin-top: 70px;">
                        Tentang Kami
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container" style="padding: 20px; margin-top: 50px;">
    <div class="row">
        <div class="col text-center">
            <h1 style="font-weight: bolder;">Testimoni</h1>
            <h5 class="rounded" style="font-weight: lighter;">Berbagai review positif dari pengguna website kami</h5>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #2a4499; border-radius: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 40vh;">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profilpasien.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Putro Suryono</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profile2.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Michale Duko</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profile3.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Putro Suryono</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profile4.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Michale Duko</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profile5.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Putro Suryono</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 40px;">
                                <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                    <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                        <img src="/img/profile6.jpg" style="width: 50px; height: 50px; border-radius: 50%; margin-top: 20px;">
                                    </div>
                                    <div style="text-align: center; margin-top: 5px; color: white;">
                                        <h2 style="font-size: 1rem;">Michale Duko</h2>
                                        <p style="font-size: 0.75rem; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid p-5" style="background-color: #132768; margin-top:100px ;">
    <div class="text-center text-light">
        <h1 style="color: white;">Memanen Kecerdasan dari Algoritma</h1>
        <h1 style="color: white;">Merintis Masa Depan AI</h1>
        <p class="nav-item active" style="border-bottom: 1px solid white;"></p>
        <h3 style="color: white; font-size: medium; text-align: center;">© 2024 OpticScan. All rights reserved.</h3>
    </div>    
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvY4IAKKJTikOwE3MCuSKSyGVNPhmR8fE92FN3wXAPJEBE2EsmCulO+v3SEoNnE" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgjAZIkEkLJm6gOtTDuvzsaft3eL5mt6I0cwl0AzV9SQ5FeG1O4" crossorigin="anonymous"></script>


@endsection

