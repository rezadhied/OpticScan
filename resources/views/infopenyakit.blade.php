@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>INFO PENYAKIT MATA</title>
  </head>
  <body style="background-color: #365486;">
    <h1 style="font-weight: bolder; font-size: 50px; margin-left: 70px; color:white">Riwayat Saya</h1>
    <div class="p-2 d-flex justify-content-between" style=" margin-right:60px">
      <form class="form-inline ml-auto">
        <div class="input-group">
            <input class="form-control mr-sm-2" type="search" placeholder="cari..." aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    </div><br>
    
    <table class="table table-striped mx-auto bg-white rounded col-md-11 rounded-lg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">
              Nama 
              <button class="btn btn-link btn-sort" data-sort="name">
                  <i class="fas fa-sort"></i>
              </button>
          </th>
          <th scope="col">
              Diagnosa 
              <button class="btn btn-link btn-sort" data-sort="diagnose">
                  <i class="fas fa-sort"></i>
              </button>
          </th>
          <th scope="col">
              No Hp 
              <button class="btn btn-link btn-sort" data-sort="phone">
                  <i class="fas fa-sort"></i>
              </button> 
          </th>
          <th scope="col">
              Dokter 
              <button class="btn btn-link btn-sort" data-sort="doctor">
                  <i class="fas fa-sort"></i>
              </button>
          </th>
          <th scope="col">
              Tanggal Daftar 
              <button class="btn btn-link btn-sort" data-sort="date">
                  <i class="fas fa-sort"></i>
              </button>
          </th>
          <th scope="col">
              Status 
              <button class="btn btn-link btn-sort" data-sort="status">
                  <i class="fas fa-sort"></i>
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
                <a href="{{ route('detailpenyakit') }}" class="btn btn-primary rounded-lg"><i class="far fa-clipboard"></i></a>&nbsp;&nbsp;
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
                  <button class="btn btn-primary rounded-lg"><i class="far fa-clipboard"></i></button>&nbsp;&nbsp;
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
                  <button class="btn btn-primary rounded-lg"><i class="far fa-clipboard"></i></button>&nbsp;&nbsp;
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
                  <button class="btn btn-primary rounded-lg"><i class="far fa-clipboard"></i></button>&nbsp;&nbsp;
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
                <button class="btn btn-primary rounded-lg"><i class="far fa-clipboard"></i></button>&nbsp;&nbsp
            </td>
        </tr>
      </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end" style="margin-right:65px;">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Kembali</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Selanjutnya</a>
          </li>
    </ul>
  </nav><br><br>
  
  <div class="container-fluid" style="background-color: #132768; padding: 50px;">
    <div class="text-center text-light">
        <h1 style="color: white;">Memanen Kecerdasan dari Algoritma</h1>
        <h1 style="color: white;">Merintis Masa Depan AI</h1>
        <p class="nav-item active" style="border-bottom: 1px solid white;"></p>
        <h3 style="color: white; font-size: medium; text-align: center;">© 2024 OpticScan. All rights reserved.</h3>
    </div>    
  </div>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
@endsection