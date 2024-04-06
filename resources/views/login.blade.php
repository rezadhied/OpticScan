<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LOGIN</title>
</head>

<body class="vh-100 overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 d-none d-md-block p-0">
                <img src="/img/login.jpg" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-md-6 p-4">
                <div class="d-flex justify-content-center">
                    <img src="assets/image/logo2.png" class="justify-content-center"
                        style="width: 400px; height: 400x;">
                </div>
                <div class="text-start">
                    <h1 style="color: #132768; font-size: 60px;">Login</h1>
                    <h8 style="font-weight: lighter; color: #132768;">belum punya akun? <a href="daftar-sekarang.html"
                            style="text-decoration: underline; font-weight: bold;">Daftar Sekarang</a></h8><br><br><br>
                </div>
                <h5 style="color: #132768;">Username atau email</h5>
                <form style="color: #132768;">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user fw-light" id="text"
                            placeholder="Username">
                    </div><br>
                    <h5>Password</h5>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user fw-light" id="password"
                            placeholder="Password">
                    </div><br>
                    <div class="text-end">
                        <a href="forgot-password.html">Lupa Password?</a>
                    </div><br>
                    <div class="form-group">
                        <a id="loginButton" onclick="submit()"
                            class="btn btn-secondary btn-user btn-block rounded-5 d-grid gap-2"
                            style="background-color: #132768; font-size: 20px;">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
