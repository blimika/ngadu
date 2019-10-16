<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PENGADUAN BPS PROV. NTB</title>

        <!-- Favicons -->
        <link href="{{asset('img/bps.ico')}}" rel="icon">
        <link href="{{asset('img/bps.ico')}}" rel="apple-touch-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- App.js -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- App.css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- rumit.css -->
        <link rel="stylesheet" href="{{asset('css/rumit.css')}}">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <div class="container">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top shadow">  
                <a class="navbar-brand" href="{{route('depan')}}">
                    <img src="{{asset('img/bps.ico')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                    BPS Prov. NTB
                </a>
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            @if(Auth()->user()->isAdmin())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarAdministratorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog"></i> Administrator</a>
                                    <div class="dropdown-menu rounded" aria-labelledby="navbarAdministratorDropdown">
                                        <a class="dropdown-item" href="{{route('administrator.dashboard')}}">Dashboard Laporan Pengaduan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('administrator.detail')}}">Manajemen Laporan Pengaduan</a>
                                        <div class="dropdown-divider"></div>
                                    </div>
                            </li>
                            @endif

                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> Beranda</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengaduan.form') }}"><i class="fas fa-robot"></i> <b>Buat Pengaduan</b></a>
                            </li>

                            @if (Route::has('logout'))
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </li>
                            @endif
                            
                            @else
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><b>Login</b></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><b>Register</b></a>
                                    </li>
                                @endif

                                @if(Route::current()->getName() == 'welcome')
                                <li class="nav-item">
                                <a class="nav-link" href="#tentang">Tentang</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="#faq">F.A.Q</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" href="#kontak">Kontak</a>
                                </li>
                                @endif
                        @endauth
                    @endif
                </ul>
            </nav>

            <div class="d-flex flex-column">
                    @yield('content')
            </div>
        </div>
    </body>
</html>
