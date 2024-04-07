<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LOGIN</title>
</head>

<img style="height: 740px; width: 750px" src="/img/login.jpg" class="rounded float-start" alt="...">

<div class="bg-Light">
<div class="row">
    <div class="text-end">
    <p><a href="#" class="link-underline">Kembali ke Beranda</a></p>
    </div>
    <div class="col-md-12 justify-content-end">
        <div style="padding:35px;">
            <div class="text-start">
                <h1>Login</h1>
                <h8 style="font-weight: lighter;">belum punya akun? <a href="/register#" style="text-decoration: underline; font-weight: bold;">Daftar Sekarang</a> </h8 > <br><br><br>
            </div>            
            <h5>Username atau email</h5>
            <form >
                <div class="form-group row">
                    <input type="text" class="form-control form-control-user fw-light" id="text" placeholder="Username">
                </div><br>
                <h5>Password</h5>
                <div class="form-group row">
                    <input type="password" class="form-control form-control-user fw-light" id="password" placeholder="Password">
                </div><br>
                <div class="text-end">
                        <a href="forgot-password.html">Lupa Password?</a>
                </div><br>
                <div class="form-group row">
                    <a id="loginButton"onclick="submit()" class="btn btn-secondary btn-user btn-block rounded-5 d-grid gap-2" style="background-color: #132768; font-size: 20px;">
                        Login 
                    </a>
                </div>
                <div><br>
                    <h6 class="text-center">Atau</h6>
                </div>
                <div class="form-group row">
                    <a id="loginButton"onclick="submit()" class="btn btn-secondary btn-user btn-block rounded-5 d-grid gap-2"   >
                        <i class="fab fa-google"></i> Lanjutkan dengan Google
                    </a>
                </div><br>
                <div class="form-group row">
                    <a id="loginButton"onclick="submit()" class="btn btn-secondary btn-user btn-block rounded-5 d-grid gap-2">
                        <i class="fab fa-facebook"></i> Lanjutkan dengan Facebook
                    </a>
                </div>                
                <div><br>
            </form>
        </div>
    </div>
    <div class="col-md-5 loginbg">
    </div>
</div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>