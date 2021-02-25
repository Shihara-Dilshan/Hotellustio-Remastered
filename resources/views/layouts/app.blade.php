<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background: #f4f4f4;
        }

        .jumbotron{
            background: url("https://raw.githubusercontent.com/Shihara-Dilshan/Hotellustio-php-mySQL/master/assets/images/marina-bay-sands-1920x1080-infinity-pool-pool-hotel-travel-booking-336.jpg") center center no-repeat;
            background-size: cover;
        }

        .jumbotron .container{
            color: #fff;
            padding:100px 60px 0 60px;
            min-height: 500px;
        }
        hr {
            border: 0.5px white solid;
        }

        .blockquote{
            background: #d0d0d0;
            padding: 50px 0 50px 0;
            text-align: center;
        }

        .blocks{
            text-align: center;
            margin-top: 30px;
            padding-bottom: 100px;
        }
        .boxes .row{
            margin:100px 0 100px 0;
        }
        .righ{
            text-align: right;
        }
        .ico{
            font-size:7rem;
            text-align: center;
            color: #08f;
        }
        .newsletter{
            background: url("https://raw.githubusercontent.com/Shihara-Dilshan/Hotellustio-php-mySQL/master/assets/images/conroom.jpg") center center no-repeat;
            background-size: cover;
            margin: 0;
            padding:50px 0 50px 0;
            color:#fff;
        }
        .newsletter h1{
            margin-top: 150px;
        }
        .subfoot{
            padding: 40px 0;
            background: #ffffff;
            color: #000000;
        }
        .subfoot .row{
            padding:20px;
        }
        .subfoot .col-8{
            border-right: 1px white solid;
        }
        .subfoot .col-4{
            text-align: center;
        }
        .subfoot a{
            color: #000000;
        }
        .footer p{
            text-align: center;
            font-weight: bold;
            padding:20px;
            background: #ffffff;
            color: #000000;
            margin-bottom:0;
        }
    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    HotelLustrio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="/rooms">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">Check Availability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">Booking</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <section class="subfoot">
            <div class="container">
                <div class="row">
                    <div class="col-8">

                        <p>The story of HOTEL LUSTRIO INN Colombo which opened its doors in 1984 is a splendid tale of continual improvement of product and the highest standards of quality in hospitality. Having embraced over 3 decades of expertise in hospitality our vision and beliefs are firmly grounded in extending a true personalized service to all our guests, laced with an unforgettable luxury hotel experience. The brand has enticed many elite personalities from around the world including heads of government, prime ministers of leading nations, royalty, well known sports and entertainment personalities and many more. </p>
                    </div>
                    <div class="col-4" style="display: flex; flex-direction: column; justify-content: space-between; align-items: flex-start;">
                        <div><i class="fas fa-envelope"></i> <a href="#">Mail us: hotellustrio@gmail.com</a></div><br>
                        <div><i class="fas fa-phone-volume"></i> <a href="#">Contact us: +94750935556</a></div><br>
                        <div><i class="fas fa-pencil-alt"></i> <a href="#">Subscribe: youtube.com/hotellustrio</a></div><br>
                    </div>
                </div>
            </div>
        </section>


        <footer class="footer">
            <p>Copyright &copy; {{date("Y")}}</p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>
