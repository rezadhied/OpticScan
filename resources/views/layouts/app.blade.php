<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/img/logo.png" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- font,bootstrap,css -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .sidebar {
            background-color: rgba(19, 39, 104, 1);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 250px;
            padding: 20px;
        }

        .main-content {
            margin-left: 270px; /* Adjust this value to prevent content overlap with the sidebar */
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="app" class="d-flex">
        <!-- Sidebar -->
        <div class="d-flex flex-column sidebar">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none pe-5">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-6"><img src="/img/logo.png" alt=""></span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('dashboardpasien') }}"
                        class="nav-link d-flex align-items-center gap-2 text-white" aria-current="page">
                        <img src="/img/home.png" alt="">
                        Beranda
                    </a>
                    <a href="{{ route('infopenyakit') }}"
                        class="nav-link d-flex align-items-center gap-2 text-white" aria-current="page"
                        style="padding-top: 10px; padding-bottom: 10px;">
                        <img src="/img/riwayat.png" alt="">
                        Riwayat
                    </a>
                    <a href="{{ route('tkami') }}" class="nav-link d-flex align-items-center gap-2 text-white"
                        aria-current="page" style="padding-top: 10px; padding-bottom: 10px;">
                        <img src="/img/team.png" alt="">
                        Tentang Kami
                    </a>
                    <a href="{{ route('setelan') }}" class="nav-link d-flex align-items-center gap-2 text-white"
                        aria-current="page" style="padding-top: 10px; padding-bottom: 10px;">
                        <img src="/img/setting.png" alt="" style="width: 25px; height: 25px;">
                        Setelan
                    </a>
                </li>
                @if (Auth::user()->role !== 'pasien')
                    <li>
                        <a href="{{ route('datapasien.index') }}"
                            class="nav-link d-flex align-items-center gap-2 text-white" aria-current="page">
                            <img src="/img/people.png" alt="">
                            Pasien
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role === 'admin')
                    <li>
                        <a href="{{ route('kelolaPengguna.index') }}"
                            class="nav-link d-flex align-items-center gap-2 text-white" aria-current="page">
                            <img src="/img/people.png" alt="">
                            List Dokter
                        </a>
                    </li>
                @endif
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/img/profile.png" alt="" width="32" height="32" class="rounded-circle me-2">
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="main-content flex-grow-1">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <div class="title mt-4">
                                <h1 class="fs-4">Halo, {{ Auth::user()->name }}!</h1>
                            </div>
                            <p style="font-size: small; color: grey">Selamat Datang, Selamat Beraktivitas</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </header>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
