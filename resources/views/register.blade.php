<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            border-radius: 25px;
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .card-body {
            height: 100%;
            overflow-y: auto;
        }

        .img-fluid {
            border-radius: 25px 0 0 25px;
            height: 100%; 
            object-fit: cover;
        }
    </style>
</head>
<body class="flex-row">
    <div class="container-fluid h-auto">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 p-4">
                <div class="card shadow p-4">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 h-auto">
                            <img src="/img/login.jpg" class="img-fluid h-100" alt="Login Image">
                        </div>
                        <div class="col-md-6 d-flex flex-column h-100">
                            <div class="card-body">
                                <div class="text-start">
                                    <h1 class="justify-center align-content-lg-center" style="color: #132768; font-size: 45px;">Sign Up</h1>
                                    <span>Sudah punya akun? <a class="link-opacity-50-hover fw-semibold" href="/login">Log in</a></span><br><br><br>
                                </div>
                                @if (session('alert'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('alert') }}
                                    </div>
                                @endif
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label for="name" style="color: #132768;">Nama Lengkap</label>
                                        <input type="text" name="username" class="form-control form-control-user fw-light" id="name" placeholder="Masukkan Nama Lengkap Anda" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="Uname" style="color: #132768;">Username</label>
                                        <input type="text" class="form-control form-control-user fw-light" id="Uname" name="Uname" placeholder="Masukkan Username Anda" value="{{ old('Uname') }}">
                                        @error('Uname')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="ttl" class="form-label" style="color: #132768;">Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-user fw-light" id="ttl" name="ttl" placeholder="Masukkan tanggal lahir anda" value="{{ old('ttl') }}">
                                        @error('ttl')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="email" class="form-label" style="color: #132768;">Email</label>
                                        <input type="text" class="form-control form-control-user fw-light" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="NoHP" class="form-label" style="color: #132768;">Nomor Handphone</label>
                                        <input type="text" class="form-control form-control-user fw-light" id="NoHP" name="NoHP" placeholder="Masukkan Nomor Handphone">
                                        @error('NoHP')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="password" class="form-label" style="color: #132768;">Password</label>
                                        <input type="password" class="form-control form-control-user fw-light" id="password" name="password" placeholder="Masukkan Password Anda">
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <span class="text-secondary" style="font-size: small">Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol</span>
                                    <div class="form-group mb-2">
                                        <label for="password_confirmation" class="form-label" style="color: #132768;">Konfirmasi Password</label>
                                        <input type="password" class="form-control form-control-user fw-light" id="password_confirmation" name="password_confirmation" placeholder="Masukkan ulang password">
                                        @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary hover:bg-white hover:text-primary" type="submit">Buat Akun</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
