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

            .container-fluid{
                min-height:100%;
            }

            /* section */
            #beranda {
                padding-top:70px;
                padding-bottom:70px;
                color: #fff; 
                height: 100%;
                background-color: #23374d;
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
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengaduan.form') }}">Buat Pengaduan</a>
                        </li>

                        @if (Route::has('logout'))
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                        @endif
                        
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

    <div class="container-fluid mr-5  ml-5 mb-5" style="margin-top:100px">
            @yield('content')
    </div>

    </body>
</html>
