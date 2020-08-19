<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="imgs/logo.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/modified.css">

    @yield('imports')
    @yield('script')
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#"/><span id="name">Poverty🪓</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @guest
                        <div class="collapse navbar-collapse" id="show-menu">
                            <ul class="navbar-nav ml-auto">
                                <a href="{{ route('login') }}">Login</a>
                                <a href="{{ route('register') }}">Register</a>
                            </ul>
                        </div>
                    @else
                        <div class="collapse navbar-collapse" id="show-menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home"><span>Home</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service"><span>Services</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#charities"><span>Charities</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about"><span>About</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact"><span>Contact Us</span></a>
                                </li>
                                <li class="nav-item .search-container">
                                    <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                                    <form>
                                        <input type="search">
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
            </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">Contact us</h4>
                            <p class="address">
                                123 Second Street Fifth <br>
                                Avenue,<br>
                                Manhattan, New York<br>
                                +987 654 3210
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="item">
                            <h4 class="text-uppercase">additional links</h4>
                            <ul>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p>OGIVE © 2020</p>
            </div>
        </footer>
</body>
</html>
