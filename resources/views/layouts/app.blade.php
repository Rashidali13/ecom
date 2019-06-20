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
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{{ asset('public/assets/js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/smoothslides.theme.css') }}" rel="stylesheet">
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
                                    <li><a href="#"><i class="far fa-envelope"></i> hmdesigner.print@gmail.com</a></li>
                                    <li><a href="tel:9057902976"><i class="fas fa-phone"></i> 905-790-2976</a></li>
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
                    <div class="col-md-3 col-lg-2">
                        <div class="side-bar">
                            <div class="toper-text">
                                <h2>SHOP BY DEPARTMENT</h2>
                            </div>
                            <div class="sidebar-nav">
                                <ul>
                                    <li>
                                        <a href="#">Top Sellers<i class="fas fa-angle-right"></i></a>
                                        <div class="cata-drop-down">
                                            <ul>
                                                <li>
                                                    <a href="#">Business Cards<i class="fas fa-angle-right"></i></a>
                                                    <div class="sub-dropdown">
                                                        <div class="text-info">
                                                            <div class="text-bar">
                                                                <h2>Business Cards</h2>
                                                                <p class="add">Professional services for Custom Business Card Printing and Personalized Cards. We are your trusted printing services provider.
                                                                </p>
                                                                <div class="block">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                            <div class="image-holder">
                                                                <img src="public/assets/img/card.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <h2>Select a Product Type</h2>
                                                            <li><a href="#" title="My Account" class="event">14pt (Profit Maximizer)</a></li>
                                                            <li><a href="#" class="event">16pt + AQ</a></li>
                                                            <li><a href="#" class="event">Same Day Business Cards</a></li>
                                                            <li><a href="#" class="event">18PT Writable (C1S)</a></li>
                                                            <li><a href="#" class="event">14pt + Matte Finish</a></li>
                                                            <li><a href="#" class="event">13pt Enviro Uncoated</a></li>
                                                            <li><a href="#" class="event">14pt Writable + AQ (C1S)</a></li>
                                                            <li><a href="#" class="event">16pt Matte Lam + SPOT UV</a></li>
                                                            <li><a href="#" class="event">16pt Matte / Silk Lamination</a></li>
                                                            <li><a href="#" class="event">38PT Luxury</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#">Specialty Business Cards<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Postcards<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Specialty PostcardsNEW<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Flyers<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Brochures<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Roll Labels / Stickers<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Bookmarks<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Presentation Folders<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Booklets<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Magnets<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Greeting CardsNEW<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Numbered Tickets<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Wall Calendars<i class="fas fa-angle-right"></i></a></li>
                                                <li><a href="#">Variable Printing<i class="fas fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="#">Large Format<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Print Products<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Specialty Papers<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Packaging<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Stationery<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Labels / Stickers<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">ApparelNEW<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Direct Mail<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Promotional<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Office Materials<i class="fas fa-angle-right"></i></a></a></li>
                                    <li><a href="#">Business Tools NEW<i class="fas fa-angle-right"></i></a></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </main>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="footer-holder">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 border-right pt-2">
                            <div class="footer-logo">
                                <a href="#"><img src="{{ asset('public/assets/img/home-logo.png') }}" alt=""></a>
                            </div>
                            <div class="add">
                                <h2>
                                    BUSINESS HOURS</h2>
                                <address>
                                    Monday to Friday<br>
                                    Customer Service: 8 AM to 5 PM EST<br>
                                    Local Pickup: 8 AM to 9 PM EST
                                </address>
                                <a href="tel:18668992499" class="tel"><i class="fas fa-phone" aria-hidden="true"></i>905-790-2976</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="footer-nav pt-2">
                                <ul>
                                    <h2>H&M Designers</h2>
                                    <li><a href="#">About SinaLite</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                </ul>
                                <ul>
                                    <h2>OUR SERVICES</h2>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">Turnaround Options</a></li>
                                    <li><a href="#">Direct Mail</a></li>
                                    <li><a href="#">Custom Quotes</a></li>
                                    <li><a href="#">Submit Custom Order</a></li>
                                    <li><a href="#">Branded Websites</a></li>
                                </ul>
                                <ul>
                                    <h2>RESOURCES</h2>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Artwork Setup Guides</a></li>
                                    <li><a href="#">Free Delivery Eligibility</a></li>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="{{ asset('public/assets/js/jquery.js') }}" defer></script>
<script src="{{ asset('public/assets/js/smoothslides-2.1.0.min.js') }}" defer></script>
<script type="text/javascript">
    $(window).load( function(){
        $('#smoothslider').smoothSlides();
    });
</script>
