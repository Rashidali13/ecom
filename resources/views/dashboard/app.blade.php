<!DOCTYPE html>
<html lang="en">
<head>
    <title>H M Designers </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{URL::asset('public/assets/img/favicon.ico')}}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/vendors.css')}}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/assets/css/style.css')}}" />

    <link href="{{URL::asset('public/css/dashboard/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <link href="{{ URL::asset('public/css/dashboard/css/active-shop.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/js/switchery/switchery.css')}}" rel="stylesheet">


    <script src=" {{URL::asset('public/js/jquery.min.js') }}"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{URL::asset('assets/js/vendors.js')}}"></script>

    {{--<!-- custom app -->--}}
    <script src="{{URL::asset('public/assets/js/app.js')}}"></script>


    <!--active-shop [ RECOMMENDED ]-->
    <script src="{{ URL::asset('public/js/active-shop.min.js') }}"></script>

    <!--Alerts [ SAMPLE ]-->
    <script src="{{ URL::asset('public/js/demo/ui-alerts.js') }}"></script>

    <script src="{{ URL::asset('public/js/spartan-multi-image-picker-min.js') }}"></script>

    <!--Custom JavaScript [ REQUIRED ]-->
{{--    <script src="{{ URL::asset('public/js/custom.js')}}"></script>--}}


    <script src="{{ URL::asset('public/js/switchery/switchery.js')}}"></script>

    <script type="text/javascript">

        $( document ).ready(function() {
            //$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            if($('.active-link').parent().parent().parent().is('ul')){
                $('.active-link').parent().parent().addClass('in');
                $('.active-link').parent().parent().parent().addClass('in');
            }
            if($('.active-link').parent().parent().is('li')){
                $('.active-link').parent().parent().addClass('active-sub');
            }
            if($('.active-link').parent().is('ul')){
                $('.active-link').parent().addClass('in');
            }

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

        });

    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133955404-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', @php env('TRACKING_ID') @endphp);
        </script>
    @endif
</head>
<body>
<!-- begin app -->
<div class="app">
    <!-- begin app-wrap -->
    <div class="app-wrap">
        <!-- begin pre-loader -->
        <div class="loader">
            <div class="h-100 d-flex justify-content-center">
                <div class="align-self-center">
                    <img src="{{URL::asset('public/assets/img/loader/loader.svg')}}" alt="loader">
                </div>
            </div>
        </div>
        <!-- end pre-loader -->
        <!-- begin app-header -->
        <header class="app-header top-bar">
            <!-- begin navbar -->
            <nav class="navbar navbar-expand-md">
                <!-- begin navbar-header -->
                <div class="navbar-header d-flex align-items-center">
                    <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                    <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                        <img src="{{URL::asset('public/assets/img/logo.png')}}" class="img-fluid logo-desktop" alt="logo" />
                        <img src="{{Url::asset('public/assets/img/logo-icon.png')}}" class="img-fluid logo-mobile" alt="logo" />
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-align-left"></i>
                </button>
                <!-- end navbar-header -->
                <!-- begin navigation -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navigation d-flex">
                        <ul class="navbar-nav nav-left">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                    <i class="ti ti-align-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu mega-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                    <div class="row no-gutters">
                                        <div class="col-sm-2 p-20">
                                            <h4>UI Kit</h4>
                                            <ul>
                                                <li class="nav-link">
                                                    <a href="ui-alerts.html">Alerts</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-button.html">Buttons</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-cards.html">Cards</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-carousel.html">Carousel</a>
                                                </li>

                                                <li class="nav-link">
                                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-list-group.html">List Group</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-modals.html">Modals</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-progressbars.html">Progress Bars</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="ui-tabs.html">Tabs</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-2 p-20">
                                            <h4>Pages</h4>
                                            <ul>
                                                <li class="nav-link">
                                                    <a href="page-account-settings.html">Account Settings</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-clients.html">Clients</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-contacts.html">Contacts</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-gallery.html">Gallery</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-pricing.html">Pricing</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-task-list.html">Task List</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-404.html">404</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-500.html">500</a>
                                                </li>
                                                <li class="nav-link">
                                                    <a href="page-coming-soon.html">Coming Soon</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 p-20">
                                            <h4>Contact Us</h4>
                                            <div>
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="Password1" placeholder="Enter Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="Email1" placeholder="Enter Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Message" id="Textarea1" rows="3"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="chart-wrap">
                                                <div class="p-20">
                                                    <h4 class="mb-1">Page Views</h4>
                                                    <p>Daily page visitors</p>
                                                    <h2 class="text-primary font-xxl mt-2">80+</h2>
                                                </div>
                                                <div class="apexchart-wrapper">
                                                    <div id="pageview"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link " id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop Down
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item nav-link" href="javascript:void(0)">Action</a>
                                    <a class="dropdown-item nav-link" href="javascript:void(0)">Another action</a>
                                    <a class="dropdown-item nav-link" href="javascript:void(0)">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                <a href="javascript:void(0)" class="nav-link expand">
                                    <i class="icon-size-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav nav-right ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-email"></i>
                                </a>
                                <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
                                            <label class="label label-info label-round">6</label>
                                            <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                <span class="font-13"> Mark all as read</span></a>
                                        </li>
                                        <li class="dropdown-body">
                                            <ul class="scrollbar scroll_dark max-h-240">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/03.jpg')}}" alt="user3">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Brianing Leyon</p>
                                                                <small>You will sail along until you...</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/01.jpg')}}" alt="user">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Jimmyimg Leyon</p>
                                                                <small>Okay</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/02.jpg')}}" alt="user2">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Brainjon Leyon</p>
                                                                <small>So, make the decision...</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/04.jpg')}}" alt="user4">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Smithmin Leyon</p>
                                                                <small>Thanks</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/05.jpg')}}" alt="user5">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Jennyns Leyon</p>
                                                                <small>How are you</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <img class="img-fluid" src="{{Url::asset('public/assets/img/avtar/06.jpg')}}" alt="user6">
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Demian Leyon</p>
                                                                <small>I like your themes</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a class="font-13" href="javascript:void(0)"> View All messages </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-bell"></i>
                                    <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span>
                                        </span>
                                </a>
                                <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                    <ul>
                                        <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                            <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                <span class="font-13"> Clear all</span></a>
                                        </li>
                                        <li class="dropdown-body min-h-240 nicescroll">
                                            <ul class="scrollbar scroll_dark max-h-240">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <div class="bg-type bg-type-md">
                                                                    <span>HY</span>
                                                                </div>
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">New registered user</p>
                                                                <small>Just now</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <div class="bg-type bg-type-md bg-success">
                                                                    <span>GM</span>
                                                                </div>
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">New invoice received</p>
                                                                <small>22 min</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <div class="bg-type bg-type-md bg-danger">
                                                                    <span>FR</span>
                                                                </div>
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Server error report</p>
                                                                <small>7 min</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <div class="bg-type bg-type-md bg-info">
                                                                    <span>HT</span>
                                                                </div>
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Database report</p>
                                                                <small>1 day</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <div class="notification d-flex flex-row align-items-center">
                                                            <div class="notify-icon bg-img align-self-center">
                                                                <div class="bg-type bg-type-md">
                                                                    <span>DE</span>
                                                                </div>
                                                            </div>
                                                            <div class="notify-message">
                                                                <p class="font-weight-bold">Order confirmation</p>
                                                                <small>2 day</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a class="font-13" href="javascript:void(0)"> View All Notifications
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link search" href="javascript:void(0)">
                                    <i class="ti ti-search"></i>
                                </a>
                                <div class="search-wrapper">
                                    <div class="close-btn">
                                        <i class="ti ti-close"></i>
                                    </div>
                                    <div class="search-content">
                                        <form>
                                            <div class="form-group">
                                                <i class="ti ti-search magnifier"></i>
                                                <input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown user-profile">
                                <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{Url::asset('public/assets/img/avtar/02.jpg')}}" alt="avtar-img">
                                    <span class="bg-success user-status"></span>
                                </a>
                                <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                    <div class="bg-gradient px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="mr-1">
                                                <h4 class="text-white mb-0">Alice Williams</h4>
                                                <small class="text-white">Henry@example.com</small>
                                            </div>
                                            <a href="#" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                    class="zmdi zmdi-power"></i></a>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                            <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                        <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                            <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                            <span class="badge badge-primary ml-auto">6</span>
                                        </a>
                                        <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                            <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                        </a>
                                        <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                            <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <a class="bg-light p-3 text-center d-block" href="#">
                                                    <i class="fe fe-mail font-20 text-primary"></i>
                                                    <span class="d-block font-13 mt-2">My messages</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="bg-light p-3 text-center d-block" href="#">
                                                    <i class="fe fe-plus font-20 text-primary"></i>
                                                    <span class="d-block font-13 mt-2">Compose new</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end navigation -->
            </nav>
            <!-- end navbar -->
        </header>
        <!-- end app-header -->
        <!-- begin app-container -->
        <div class="app-container">
            <!-- begin app-nabar -->
            <aside class="app-navbar">
                <!-- begin sidebar-nav -->
                <div class="sidebar-nav scrollbar scroll_light">
                    <ul class="metismenu " id="sidebarNav">
                        <li class="nav-static-title">Personal</li>
                        <li class="active">
                            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="nav-icon ti ti-rocket"></i>
                                <span class="nav-title">Dashboards</span>
                                <span class="nav-label label label-danger">9</span>
                            </a>
                            <ul aria-expanded="false">
                                <li class="active"> <a href='{{route('admin.dashboard')}}'>Default</a> </li>
                                <li> <a href='{{route('Users.index')}}'>Users</a> </li>
                                <li class="active"> <a href='#'>Categories</a>
                                <ul>
                                    <li><a href="{{route('categories.index')}}">Categories</a></li>
                                    <li><a href="{{route('subcategories.index')}}">SubCategories</a></li>
                                </ul>
                                </li>
                                <li> <a href='{{route('products.admin')}}'>Product</a> </li>
                                <li> <a href='#'>Orders</a> </li>
                                <li> <a href='#'>Sales</a> </li>
                                <li> <a href='#'>Pending</a> </li>
                                <li> <a href='#'>Todo</a> </li>
                                <li> <a href='#'>Settings</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end sidebar-nav -->
            </aside>
            <!-- end app-navbar -->
            <!-- begin app-main -->
            <div class="app-main" id="main">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    @yield('content')

            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
        <!-- begin footer -->
            @include('partials.modal')
        <footer class="footer">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-left">
                    <p>&copy; Copyright 2019. All rights reserved.</p>
                </div>
                <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                    <p><a href="#"></a>H M Designers </p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->
@yield('script')
</body>
</html>
