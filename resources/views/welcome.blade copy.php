<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PENGADUAN BPS PROV. NTB</title>

        <!-- Favicons -->
        <link href="{{asset('img/bps.ico')}}" rel="icon">
        <link href="{{asset('img/bps.ico')}}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- App.js -->
        <script src="{{asset('js/app.js')}}"></script>

        <!-- App.css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                position: relative;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* section */
            #beranda {
                padding-top:70px;
                padding-bottom:70px;
                color: #fff; 
                height: 100%;
                background-color: #23374d;
            }

            #tentang {
                padding-top:70px;
                padding-bottom:70px;
                color: #fff; 
                height: 500px;
                background-color: #1089ff;
            }

            
            #faq {
                padding-top:70px;
                padding-bottom:70px;
                color: #fff; 
                height: 500px;
                background-color: #e5e5e5;
            }

            #kontak {
                padding-top:70px;
                padding-bottom:70px;
                color: #fff; 
                height: 500px;
                background-color: #eeeeee;
            }

        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">  
            <a class="navbar-brand" href="https://ntb.bps.go.id">
                <img src="{{asset('img/bps.ico')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                BPS Prov. NTB
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#beranda">Beranda</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#faq">FAQ</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        @else
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                    @endauth
                @endif
            </ul>
        </nav>
        
        <div class="container-fluid">
            <div class="d-flex"  id="beranda">
                <div class="flex-fill align-items-center ">
                    <div class="d-flex justify-content-center m-10">
                        <a href="https://ntb.bps.go.id" clas>
                            <img src="{{asset('img/logo-bps.png')}}" width="200" height="200" class="d-inline-block align-top" alt="">
                        </a>
                        <div class="ml-3">
                            <h1>SELAMAT DATANG</h1>
                            <h3>WEBSITE LAYANAN PENGADUAN</h3>
                            <h3>BADAN PUSAT STATISTIK</h3>
                            <h5>PROVINSI NUSA TENGGARA BARAT</h5>
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </body>
</html>
