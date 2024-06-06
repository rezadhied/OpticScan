<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .border-secondary-subtle {
      border-color: rgba(0, 0, 0, 0.125);
    }
    .link-opacity-25-hover:hover {
      opacity: 0.25;
    }
    .card {
      border-radius: 25px;
    }
  </style>
</head>
<body>
<div class="container main">
    <div class="row">
        <div class="col side-img d-flex ml-5 pl-5 w-100">
            <img src="/img/logo.png" alt="">
        </div>
        <div class="col-md-6 ms-md-5">
          <div class="card-body">
          <span class="float-md-end mb-5"><a href="/" class="text-dark">Kembali ke Beranda</a></span>
            <div class="title mt-3">
                <h1>Buat Akun</h1>
                <span>Sudah punya akun? <a class="link-opacity-50-hover" href="/login">Log in</a></span>
                <br><br>
            </div>
            <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Nama </label>
                <input type="text" class="form-control border-secondary-subtle" id="name" name="name" placeholder="Masukkan nama lengkap anda" value="{{ old('name') }}">
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Uname">Username</label>
                <input type="text" class="form-control border-secondary-subtle" id="Uname" name="Uname" placeholder="Masukkan username" value="{{ old('Uname') }}">
                @error('Uname')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" class="form-control border-secondary-subtle" id="ttl" name="ttl" placeholder="Masukkan tanggal lahir anda" value="{{ old('ttl') }}">
                @error('ttl')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control border-secondary-subtle" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3 ">
                <label for="NoHP">Nomor Handphone</label>
                <input type="text" class="form-control border-secondary-subtle" id="NoHP" name="NoHP" placeholder="Masukkan Nomor Handphone">
                @error('NoHP')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-1">
                <label for="password">Password</label>
                <input type="password" class="form-control border-secondary-subtle" id="password" name="password" placeholder="Masukkan password">
                @error('password')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-1">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" class="form-control border-secondary-subtle" id="password_confirmation" name="password_confirmation" placeholder="Masukkan ulang password">
                @error('password_confirmation')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <span class="text-secondary" style="font-size: small">Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol</span>
              <br><br>
              <button class="btn btn-primary" type="submit">Buat Akun</button>
            </form>
          </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
