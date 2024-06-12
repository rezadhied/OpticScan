<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LOGIN</title>
    <style>
        .card {
            border-radius: 25px;
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }
    </style>
</head>

<body class="vh-100 overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-10 p-4">
                <div class="card shadow p-4">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="/img/login.jpg" class="img-fluid h-100"
                                alt="Login Image" style="border-radius: 25px 0 0 25px;">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="text-start mt-3">
                                    <h1 class="justify-center align-content-lg-center"
                                        style="color: #132768; font-size: 45px;">Login</h1>
                                    <h8 style="font-weight: lighter; color: #132768;">Belum punya akun? <a
                                            href="/register"
                                            style="text-decoration: underline; font-weight: bold;">Daftar Sekarang</a></h8><br><br><br>
                                </div>
                                @if (session('alert'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('alert') }}
                                    </div>
                                @endif
                                <h5 style="color: #132768;">Username</h5>
                                <form method="POST" action="{{ route('login.post') }}" style="color: #132768;">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input type="text" name="username" class="form-control form-control-user fw-light"
                                            id="username" placeholder="Username atau Email"
                                            value="{{ old('username') }}">
                                    </div>
                                    <h5>Password</h5>
                                    <div class="form-group mb-3">
                                        <input type="password" name="password"
                                            class="form-control form-control-user fw-light" id="password"
                                            placeholder="Password">
                                    </div>
                                    @if ($errors->has('alert'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('alert') }}
                                </div>
                                @endif
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-secondary btn-user btn-block rounded-5 d-grid gap-2 w-100 mt-3"
                                            style="background-color: #132768; font-size: 20px;">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
