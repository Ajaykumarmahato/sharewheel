<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="shortcut icon" href="{{ asset('/images/logo/shortcut-logo.png') }}" type="image/png" sizes="30x30">

    <!-- Title Page-->
    <title>ShareWheel Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Swal js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- image viewer css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" />

    <!-- ShareWheel CSS -->
    <link rel="stylesheet" href="{{ asset('/css/admin-css/admin.css') }}" />

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/admin-css/theme.css')}}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body onload="myPreloader()">
    <!-- for preloader -->
    <div id="loading"
        style="position:fixed; background: rgba(255, 255, 255, 0.7) url('{{ asset('/images/loading/eclipse-preloader.gif')}}') no-repeat center ;">
    </div>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ asset('/admin') }}">
                            <img src="{{ asset('/images/logo/logo.png') }}" style="height:50px;width:120px;"
                                alt="ShareWheel" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin-users">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="/admin-products">
                                <i class="fas fa-car"></i>Vehicles</a>
                        </li>
                        <li>
                            <a href="/admin-feedbacks">
                                <i class="fas fa-comments"></i>Feedbacks</a>
                        </li>
                        <!-- <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li> -->
                        <li>
                            <a href="/admin-maps">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li>
                            <form action="/admin/search" method="get" class="form-inline my-2 my-lg-0"
                                style="display:inline-block;">
                                @csrf
                                @if(isset($model))
                                <select name="search_data" id="select2" class="form-control my-input">
                                    @if($model==="all")
                                    <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                    <option value="users">Users</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="brands">Brands</option>
                                    <option value="categories">Categories</option>
                                    @elseif($model==="brands")
                                    <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                    <option value="all">All</option>
                                    <option value="users">Users</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="categories">Categories</option>
                                    @elseif($model==="users")
                                    <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                    <option value="all">All</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="brands">Brands</option>
                                    <option value="categories">Categories</option>
                                    @else
                                    <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                    <option value="all">All</option>
                                    <option value="users">Users</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="brands">Brands</option>
                                    @endif
                                </select>
                                @else
                                <select name="search_data" id="select2" class="form-control my-input">
                                    <option value="all">All</option>
                                    <option value="users">Users</option>
                                    <option value="vehicles">Vehicles</option>
                                    <option value="brands">Brands</option>
                                    <option value="categories">Categories</option>
                                </select>
                                @endif
                                @if(isset($param))
                                <input value="{{$param}}" class="form-control my-input mr-sm-2" name="search_field"
                                    type="search" placeholder="Search" aria-label="Search" />
                                @else
                                <input class="form-control my-input mr-sm-2" name="search_field" type="search"
                                    placeholder="Search" aria-label="Search" />
                                @endif
                                <button class="btn my-search-button my-2 my-sm-0" title="Search Here!" type="submit">
                                    Search
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/admin-users">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="/admin-products">
                                <i class="fas fa-car"></i>Vehicles</a>
                        </li>
                        <li>
                            <a href="/admin-feedbacks">
                                <i class="fas fa-comments"></i>Feedbacks</a>
                        </li>
                        <!-- <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li> -->
                        <li>
                            <a href="/admin-maps">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <a class="my-desktop-logo" href="{{ asset('/admin') }}">
                                <img src="{{ asset('/images/logo/logo.png') }}" style="height:50px;width:120px;"
                                    alt="ShareWheel" />
                            </a>
                            <div class="header-button">
                                <form action="/admin/search" method="get"
                                    class="my-search-form form-inline my-2 my-lg-0">
                                    @csrf
                                    @if(isset($model))
                                    <select name="search_data" id="select2" class="form-control my-input">
                                        @if($model==="all")
                                        <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                        @elseif($model==="brands")
                                        <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="categories">Categories</option>
                                        @elseif($model==="users")
                                        <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                        <option value="all">All</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                        @else
                                        <option value="{{$model}}">{{ ucfirst($model) }}</option>
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        @endif
                                    </select>
                                    @else
                                    <select name="search_data" id="select2" class="form-control my-input">
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                    </select>
                                    @endif
                                    @if(isset($param))
                                    <input value="{{$param}}" class="form-control my-input mr-sm-2" name="search_field"
                                        type="search" placeholder="Search" aria-label="Search" />
                                    @else
                                    <input class="form-control my-input mr-sm-2" name="search_field" type="search"
                                        placeholder="Search" aria-label="Search" />
                                    @endif
                                    <button class="btn my-search-button my-2 my-sm-0" title="Search Here!"
                                        type="submit">
                                        Search
                                    </button>
                                </form>
                                {{-- <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <!-- Check if there is unread notification -->
                                        @if(auth()->user()->unreadNotifications->count() > 0 )
                                        <span
                                            class="{{ (request()->is('admin-users')) ? 'd-none' : 'd-block quantity' }}">{{auth()->user()->unreadNotifications->count()}}</span>
                                        @endif
                                        <div class="notifi-dropdown js-dropdown">
                                            @if(auth()->user()->unreadNotifications->count() > 0 )
                                            <div class="notifi__title">
                                                <p>You have {{auth()->user()->unreadNotifications->count()}} New
                                                    Registrations</p>
                                            </div>
                                            @endif
                                            <!-- Show the unread notification -->
                                            <div class="notification-scrollble">
                                                @foreach(auth()->user()->unreadNotifications as $notification)
                                                <a href="/admin-users/user/user-details-noti/{{$notification->id}}"
                                                    class="text-decoration-none">
                                                    <div class="notifi__item" style="background-color:#d1fff0">
                                                        <div class="img-cir img-40">
                                                            <i class="zmdi zmdi-info"
                                                                style="color:#ebe123;font-size:30px"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p>{{$notification->data['data']}}! <br><br>
                                                                <b>{{$notification->data['user_info']['first_name']}}
                                                                    {{$notification->data['user_info']['last_name']}}</b>
                                                            </p>
                                                            <span
                                                                class="date">{{\Carbon\Carbon::parse($notification->data['user_info']['created_at'])->format('M-d-Y')}}</span>
                                                        </div>
                                                    </div>
                                                </a>

                                                @endforeach

                                                <!-- Show the read notification -->
                                                @foreach(auth()->user()->readNotifications as $notification)
                                                <a href="/admin-users/user/user-details-noti/{{$notification->id}}"
                                                    class="text-decoration-none">
                                                    <div class="notifi__item">
                                                        <div class="img-cir img-40">
                                                            <i class="zmdi zmdi-info"
                                                                style="color:#ebe123; font-size:30px"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p style="color:black">{{$notification->data['data']}}!
                                                                <br><br>
                                                                <b>{{$notification->data['user_info']['first_name']}}
                                                                    {{$notification->data['user_info']['last_name']}}</b>

                                                                &nbsp;&nbsp;&nbsp;<i class="zmdi zmdi-check-circle"
                                                                    title="Read" style="font-size:20px;"></i></p>
                                                            <span
                                                                class="date">{{\Carbon\Carbon::parse($notification->data['user_info']['created_at'])->format('M-d-Y')}}</span>

                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="/manager-orders" class="text-decoration-none">All
                                                    notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="/storage/user_profile_images/{{ Auth::user()->profile_image }}"
                                                alt="Admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn text-decoration-none"
                                                href="#">{{ Auth::user()->last_name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/storage/user_profile_images/{{ Auth::user()->profile_image }}"
                                                            alt="Admin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="/admin-account/{{Auth::user()->username}}"
                                                            class="text-decoration-none">{{ Auth::user()->first_name }}
                                                            {{ Auth::user()->last_name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="/admin-account/{{ Auth::user()->username }}">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a class="my-text-hover dropdown-item zmdi zmdi-power"
                                                    href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    &nbsp;&nbsp;&nbsp;&nbsp; {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            @yield('adminContent')
            <!-- Copyright -->
            <div class="mini-footer footer-copyright text-center py-3 my-text"
                style="font-size:small;background-color:#E5E5E5;padding-top:30px">
                © 2020 Copyright:
                All rights reserved by Ajay and Priansu
            </div>
            <!-- Copyright -->
        </div>
        <!-- Scroll Top Button -->
        <button onclick="scrollToTop()" id="scroll-btn" title="Go to top">
            <i style="color:white" class="fa fa-chevron-up" aria-hidden="true"></i>
        </button>
        <!-- Scroll Top Button End -->

        <!-- Jquery JS-->
        <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('vendor/slick/slick.min.js')}}">
        </script>
        <!-- ShareWheel JS -->
        <script src="{{ asset('/js/sharewheel.js') }}" type="text/javascript"></script>

        <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{asset('js/admin-js/main.js')}}"></script>

        <!-- Admin JS -->
        <script src="{{asset('js/admin-js/admin.js')}}"></script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <!-- image viewer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
            integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
            crossorigin="anonymous"></script>
        @include('sweetalert::alert')
</body>

</html>