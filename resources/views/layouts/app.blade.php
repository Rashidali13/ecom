<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/71a841c0f3.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <header id="header">
                <div class="header-holder">
                    <div class="toper-nav">
                        <ul>
                            <li>WELCOME, ZAHID SARFRAZ!</li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Sign Out</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="row align-items-center mb-4">
                        <div class="col-md-3">
                            <div class="logo-bar">
                                <a href="#"><img src="{{ asset('public/assets/img/home-logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search our products here">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="cart-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <span>1</span>
                            </a>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="content-info">

                                <ul>
                                    <li><a href="#"><i class="far fa-envelope"></i> Submit a Support Ticket</a></li>
                                    <li><a href="#"><i class="fas fa-phone"></i> 1-866-899-2499</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i> Live Chat</a></li>
                                    <li><a href="#"><i class="fas fa-question"></i> Support Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <main id="main" role="main">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-1"></div>
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
