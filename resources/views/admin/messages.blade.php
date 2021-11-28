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


    <script src="{{ asset('js/sidebar.js') }}" defer></script>

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

    <div class="container">
        <div class="header">
            <div class="header-logo">
                <img src="/images/logo-white.png" width="80%">
            </div>
            <div class="header-search">
                <button class="button-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 385">
                        <path
                            d="M12 120.3h361a12 12 0 000-24H12a12 12 0 000 24zM373 180.5H12a12 12 0 000 24h361a12 12 0 000-24zM373 264.7H132.2a12 12 0 000 24H373a12 12 0 000-24z" />
                    </svg></button>

                <h2 id="admin-header" style="color:white;">
                    {{'SPOROCILA'}}
                </h2>

            </div>
        </div>
        <div class="main">
            <div class="sidebar">
                <ul id="sidebar-items">

                    <li class="sidebar-menu-item">
                        <a href="/identi">
                            <i class="far fa-list-alt" style="color:white;"></i>
                            <span class="sidebar-menu-item-text">IDENTI</span>
                        </a>
                    </li>



                    <li class="sidebar-menu-item">
                        <a href="/sporocila"><i class="far fa-envelope" style="color:white;"></i></i>
                            <span class="sidebar-menu-item-text">SPOROCILA</span>
                        </a>
                    </li>


                </ul>
            </div>
            <div class="page-content">

                <div class="container">
                    <div class="row" style="width:100%;">
                            <div class="col-md-12">
                                <div class="card card-white mb-5">
 
                                    <div class="card-body">
                                        <ul class="list-unstyled message">

                                            @foreach($messages as $message)
                                            <li>
                                                <div class="media align-items-center">
                                                    <div class="media-body" style="border-bottom: 1px solid lightgray;margin-bottom: 5%;">
                                                        <h5>{{$message->name.' - '.$message->email}}<span class="float-right text-primary"><i onclick="location.href='/zbrisi-sporocilo/{{$message->id}}'" class="far fa-trash-alt delete-button"></i></span>
                                                        </h5> {{$message->message}}
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach

                                    
                                        </ul>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>
