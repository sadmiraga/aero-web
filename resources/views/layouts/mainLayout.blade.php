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

    <!-- CUSTOM JS -->
    <!-- <script src="{{ asset('js/admin/sidebar.js') }}" defer></script> -->


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d264cf014.js" crossorigin="anonymous"></script>




    <!-- ajax and shit -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>



<body>

    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;500&display=swap" rel="stylesheet">


    <!-- LOGO NAVBAR -->
    <div class="logo-container">
        <img src="/images/logo.png">
    </div>

    <nav class="main-navbar navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/"><img class="navbar-brand-image" src="images/logo-white.png"></a>

        <button class="navbar-toggler dropdown-button" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('home', app()->getLocale()) }}" class="nav-link">
                        {{ __('HOME') }}
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('references', app()->getLocale()) }}" class="nav-link">
                        {{ __('REFERENCES') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('aboutUs', app()->getLocale()) }}" class="nav-link">
                        {{ __('ABOUTUS') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact', app()->getLocale()) }}" class="nav-link">

                        {{ __('CONTACT') }}
                    </a>
                </li>
            </ul>

            <div class="language-container my-2 my-lg-0">

                <!-- SI -->
                <a href="{{ route(Route::currentRouteName(), 'si') }}">
                    <div class="language-box" id="slovenian"></div>
                </a>

                <!-- EN -->
                <a href="{{ route(Route::currentRouteName(), 'en') }}">
                    <div class="language-box" id="english"></div>
                </a>

                <!-- DE -->
                <a href="{{ route(Route::currentRouteName(), 'de') }}">
                    <div class="language-box" id="german"></div>
                </a>

                <!-- HR -->
                <a href="{{ route(Route::currentRouteName(), 'hr') }}">
                    <div class="language-box" id="croatian"></div>
                </a>
            </div>
        </div>
    </nav>



    @yield('content')

    <x-footer />
</body>

</html>
