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
            margin-left: 270px;
            padding: 20px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-link img {
            width: 25px;
            height: 25px;
            transition: all 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: white !important;
            color: blue !important;
        }

        .nav-link:hover img,
        .nav-link.active img {
            filter: invert(29%) sepia(89%) saturate(6365%) hue-rotate(179deg) brightness(101%) contrast(102%);
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
                    <a href="{{ Auth::user()->role === 'dokter' ? route('dashboardDokter') : route('dashboardpasien') }}"
                        class="nav-link d-flex align-items-center gap-2 text-white {{ request()->routeIs('dashboardDokter', 'dashboardpasien') ? 'active' : '' }}"
                        aria-current="page">
                        <img src="/img/home.png" alt="">
                        Beranda
                    </a>
                    @if (Auth::user()->role === 'pasien')
                    <a href="{{ route('infopenyakit') }}"
                        class="nav-link d-flex align-items-center gap-2 text-white {{ request()->routeIs('infopenyakit') ? 'active' : '' }}"
                        style="padding-top: 10px; padding-bottom: 10px;">
                        <img src="/img/riwayat.png" alt="Riwayat">
                        Riwayat
                    </a>
                    @endif
                    <a href="{{ route('tkami') }}"
                        class="nav-link d-flex align-items-center gap-2 text-white {{ request()->routeIs('tkami') ? 'active' : '' }}"
                        style="padding-top: 10px; padding-bottom: 10px;">
                        <img src="/img/team.png" alt="">
                        Tentang Kami
                    </a>
                </li>
                @if (Auth::user()->role === 'dokter')
                    <li>
                        <a href="{{ route('datapasien.index') }}"
                            class="nav-link d-flex align-items-center gap-2 text-white {{ request()->routeIs('datapasien.index') ? 'active' : '' }}"
                            aria-current="page">
                            <img src="/img/people.png" alt="Pasien">
                            Pasien
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role === 'admin')
                    <li>
                        <a href="{{ route('admin.index') }}"
                            @class(["nav-link d-flex align-items-center gap-2 text-white","active" => Route::currentRouteName() == "admin.index"])
                            aria-current="page">
                            <img src="/img/people.png" alt="Kelola Pengguna">
                            Kelola Pengguna
                        </a>
                    </li>
                @endif
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-current="page">
                    <img src="/img/profile.png" alt="Profile" width="32" height="32" class="rounded-circle me-2">
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
