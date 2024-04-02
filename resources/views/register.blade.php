<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/regis.css">
    <!-- <style>
      .wrapper{
        background-image: url('/img/Frame280.png');
        background-size: cover;
        background-position: center; 
      }
    </style> -->
  </head>
  <body>
    <div class ="container main">
      <div class="row">
        <div class="col side-img d-flex ml-5 pl-5 w-100">
          <img src="/img/logo.png" alt="">
        </div>
        <div class="col right">
          <div class="input">
            <div class="title">
            <header>Buat Akun</header>
            <span>Sudah punya akun? <a class="link-opacity-25-hover" href="#">Log in</a> </span>
            </div>

            <form action="">
            <div class ="input-field">
            <label for="name">Username</label>
              <input type="text" class="input" id="name">
              
            </div>
            <div class ="input-field">
              <label for="email">Email</label>
              <input type="text" class="input" id="email">
              
            </div>
            <div class ="input-field">
              <label for="pass">Pasword</label>
              <input type="password" class="input" id="pass">
              
            </div>
            <p>Gunakan 8 karakter atau lebih dengan campuran huruf,angka & simbol </p>

            <button class ="btn">
              <input type="submit" value="Buat Akun">
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>