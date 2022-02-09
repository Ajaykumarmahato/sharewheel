<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <link rel="shortcut icon" href="<?php echo e(asset('/images/logo/shortcut-logo.png')); ?>" type="image/png" sizes="30x30">

        <!-- Title Page-->
        <title>ShareWheel Admin</title>

        <!-- Fontfaces CSS-->
        <link href="<?php echo e(asset('css/font-face.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">
        <!-- Swal js -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- image viewer css -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
            integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
            crossorigin="anonymous" />

        <!-- ShareWheel CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('/css/admin-css/admin.css')); ?>" />

        <!-- Vendor CSS-->
        <link href="<?php echo e(asset('vendor/animsition/animsition.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet"
            media="all">
        <link href="<?php echo e(asset('vendor/wow/animate.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/css-hamburgers/hamburgers.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/slick/slick.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
        <link href="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="<?php echo e(asset('css/admin-css/theme.css')); ?>" rel="stylesheet" media="all">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>

    <body onload="myPreloader()">
        <!-- for preloader -->
        <div id="loading"
            style="position:fixed; background: rgba(255, 255, 255, 0.7) url('<?php echo e(asset('/images/loading/eclipse-preloader.gif')); ?>') no-repeat center ;">
        </div>
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="<?php echo e(asset('/admin')); ?>">
                                <img src="<?php echo e(asset('/images/logo/logo.png')); ?>" style="height:50px;width:120px;"
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
                                    <i class="fas fa-user"></i>Users</a>
                            </li>
                            <li>
                                <a href="/admin-products">
                                    <i class="fas fa-car"></i>Products</a>
                            </li>
                            <li>
                                <a href="/admin-feedbacks">
                                    <i class="fas fa-comments"></i>Feedbacks</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>
                            <li>
                                <a href="/admin-maps">
                                    <i class="fas fa-map-marker-alt"></i>Maps</a>
                            </li>
                            <li>
                                <form class="form-inline my-2 my-lg-0" style="display:inline-block;">
                                    <input class="form-control my-input mr-sm-2"
                                        style="width:230px;display:inline-block;" type="search" placeholder="Search"
                                        aria-label="Search" />
                                    <button class="btn my-search-button my-2 my-sm-0" title="Search Here!"
                                        style="display:inline-block;" type="submit">
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
                                    <i class="fas fa-user"></i>Users</a>
                            </li>
                            <li>
                                <a href="/admin-products">
                                    <i class="fas fa-car"></i>Products</a>
                            </li>
                            <li>
                                <a href="/admin-feedbacks">
                                    <i class="fas fa-comments"></i>Feedbacks</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>Calendar</a>
                            </li>
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
                                <a class="my-desktop-logo" href="<?php echo e(asset('/admin')); ?>">
                                    <img src="<?php echo e(asset('/images/logo/logo.png')); ?>" style="height:50px;width:120px;"
                                        alt="ShareWheel" />
                                </a>
                                <div class="header-button">
                                    <form class="my-search-form form-inline my-2 my-lg-0">
                                        <input class="form-control my-input mr-sm-2" type="search" placeholder="Search"
                                            aria-label="Search" />
                                        <button class="btn my-search-button my-2 my-sm-0" title="Search Here!"
                                            type="submit">
                                            Search
                                        </button>
                                    </form>
                                    <div class="noti-wrap">
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
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>"
                                                    alt="Admin" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn text-decoration-none"
                                                    href="#"><?php echo e(Auth::user()->first_name); ?></a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>"
                                                                alt="Admin" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#"
                                                                class="text-decoration-none"><?php echo e(Auth::user()->first_name); ?></a>
                                                        </h5>
                                                        <span class="email"><?php echo e(Auth::user()->email); ?></span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a class="my-text-hover dropdown-item zmdi zmdi-power"
                                                        href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                        &nbsp;&nbsp;&nbsp;&nbsp; <?php echo e(__('Logout')); ?>

                                                    </a>
                                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                                        style="display: none;">
                                                        <?php echo csrf_field(); ?>
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
                <?php echo $__env->yieldContent('adminContent'); ?>
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
            <script src="<?php echo e(asset('vendor/jquery-3.2.1.min.js')); ?>"></script>
            <!-- Bootstrap JS-->
            <script src="<?php echo e(asset('vendor/bootstrap-4.1/popper.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.js')); ?>"></script>
            <!-- Vendor JS       -->
            <script src="<?php echo e(asset('vendor/slick/slick.min.js')); ?>">
            </script>
            <!-- ShareWheel JS -->
            <script src="<?php echo e(asset('/js/sharewheel.js')); ?>" type="text/javascript"></script>

            <script src="<?php echo e(asset('vendor/wow/wow.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/animsition/animsition.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>">
            </script>
            <script src="<?php echo e(asset('vendor/counter-up/jquery.waypoints.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/counter-up/jquery.counterup.min.js')); ?>">
            </script>
            <script src="<?php echo e(asset('vendor/circle-progress/circle-progress.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/chartjs/Chart.bundle.min.js')); ?>"></script>
            <script src="<?php echo e(asset('vendor/select2/select2.min.js')); ?>">
            </script>

            <!-- Main JS-->
            <script src="<?php echo e(asset('js/admin-js/main.js')); ?>"></script>

            <!-- Admin JS -->
            <script src="<?php echo e(asset('js/admin-js/admin.js')); ?>"></script>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous">
            </script>
            <!-- image viewer -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
                integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
                crossorigin="anonymous"></script>
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

</html><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/adminLayout.blade.php ENDPATH**/ ?>