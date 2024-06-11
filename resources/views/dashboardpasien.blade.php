@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DASHBOARD</title>
</head>
<body>
<div class="container-fluid" style="background-color: #132768; padding: 60px;">
    <div class="row">
        <div class="col-md-6 order-md-2 d-flex justify-content-end align-items-center">
            <img src="/img/mata.png" style="width: 100%; max-width: 300px;">
        </div>
        <div class="col-md-6 order-md-1" style="margin-top: 20px;">
            <h1 style="font-weight: bolder; font-size: 30px; color: white;">
                Perjalanan Anda Menuju Visi yang Lebih Baik Dimulai Sekarang
            </h1>
            <h5 style="color: white; font-weight: lighter; font-size: 20px;">
                Selamat datang di OpticScan.. Dengan teknologi canggih dan perawatan yang dipersonalisasi. Kami menawarkan pemeriksaan mata yang tepat dan solusi yang disesuaikan. Temukan kejelasan dan kepercayaan diri dengan OpticScan hari ini
            </h5>
            <div class="d-flex justify-content-start">
                <a href="{{ route('infopenyakit') }}">
                    <button class="rounded-lg btn-lg" style="background-color: #081445; color: white; font-size: 20px; font-weight: 600; margin-top: 20px;">
                        Lihat Riwayat
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #2a4499; padding: 20px; height: 390px; width: 1000px; margin-top: 150px; border-radius: 50px;">
    <div class="row">
        <div class="col text-center text-white" style="padding: 50px;">
            <h1 style="font-weight: bolder;">Deteksi Dini untuk Penyakit Mata (OpticScan)</h1>
            <h5 style="font-weight: lighter;">OpticScan merupakan aplikasi terintegrasi dengan AI untuk mendeteksi penyakit mata</h5>
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <a href="{{ route('tkami') }}">
                    <button class="rounded-lg btn-lg" style="background-color: #D9D9D9; color: #132768; font-size: 20px; font-weight: 600; margin-top: 70px;">
                        Tentang Kami
                    </button>
                </a>
            </div>
            
        </div>
    </div>
</div>

<div class="container" style="padding: 20px; margin-top: 230px;">
    <div class="row">
        <div class="col text-center">
            <h1 style="font-weight: bolder;">Testimoni</h1>
            <h5 style="font-weight: lighter;">Berbagai review positif dari pengguna website kami</h5>
        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: #2a4499;">
    <div class="row"> 
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 40vh;">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center">
                            <div class="row justify-content-center">
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profilpasien.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>Putro Suryono</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profile2.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>Michale Duko</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="row justify-content-center">
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profile3.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>Steve Rusdiana</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profile4.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>Putri Caroline</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="row justify-content-center">
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profile5.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>Anzel Kania</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <div class="single-box" style="background-color: #536f9f; height: 220px; border-radius: 15px;">
                                        <div class="img-area d-flex justify-content-center align-items-center rounded-circle" style="margin-top: 10px;">
                                            <img src="/img/profile6.jpg" style="width: 70px; height: 70px; border-radius: 50%; margin-top: 20px;">
                                        </div>
                                        <div style="text-align: center; margin-top: 5px; color: white;">
                                            <h2>David Chalamat</h2>
                                            <p style="font-size: 15px; font-weight: 300; margin-top: 10px;">Alat ini sangat membantu saya agar tetap waspada terhadap penyakit yang akan datang kepada keluarga saya, dan saya dapat melakukan pencegahan lebih dini.</p>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div><br>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br>


<div class="container-fluid" style="background-color: #132768; padding: 50px;">
    <div class="text-center text-light">
        <h1 style="color: white;">Memanen Kecerdasan dari Algoritma</h1>
        <h1 style="color: white;">Merintis Masa Depan AI</h1>
        <p class="nav-item active" style="border-bottom: 1px solid white;"></p>
        <h3 style="color: white; font-size: medium; text-align: center;">© 2024 OpticScan. All rights reserved.</h3>
    </div>    
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@endsection