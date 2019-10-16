<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pengaduan BPS Provinsi Nusa Tenggara Barat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('tema/img/bps.ico')}}" rel="icon">
  <link href="{{asset('tema/img/bps.ico')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('tema/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('tema/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('tema/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('tema/css/style.css')}}" rel="stylesheet">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

        <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <h1><a href="{{route('depan')}}">PENG<span>ADUAN</span></a></h1>
                <!--<a href="#intro" class="scrollto"><img src="{{asset('tema/img/logo.png')}}" alt="" title=""></a>-->
        </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li><a href="{{route('depan')}}/#intro">Beranda</a></li>
            <li><a href="{{route('depan')}}/#about">Tentang</a></li>
            <li><a href="{{route('depan')}}/#faq">FAQ</a></li>
            <li><a href="{{route('depan')}}/#contact">Kontak</a></li>
            @guest
            <li class="buy-tickets"><a href="{{route('daftar')}}">Register</a></li>
            <li class="buy-tickets"><a href="{{route('masuk')}}">Login</a></li>
            @else
            @if (Auth()->user()->isAdmin())
              <li class="buy-tickets"><a href="{{route('dashboard.admin')}}">Admin</a></li>
            @endif
            <li class="buy-tickets"><a href="{{route('dashboard.user')}}">Dashboard</a></li>
            <li class="buy-tickets"><a href="{{url('tiket')}}">Buat Tiket Aduan</a></li>
            <li>
                @if (Route::has('logout'))
                <a href="{{route('logout')}}">Logout</a>
                @endif
              </li>
            @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!-- container-dinamik -->
    @yield('konten')
    <!-- /.container-dinamik -->

  </main>

@include('layouts.footer')
</body>

</html>
