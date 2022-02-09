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
    <title>ShareWheel Manager</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo e(asset('css/font-face.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/font-awesome-5/css/fontawesome-all.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo e(asset('vendor/bootstrap-4.1/bootstrap.min.css')); ?>" rel="stylesheet" media="all">

    <!-- image viewer css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
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
                        <a class="logo" href="<?php echo e(asset('/manager')); ?>">
                            <img src="<?php echo e(asset('/images/logo/sharewheel-logo.png')); ?>" style="height:60px;width:150px;"
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
                            <a href="/manager">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/manager-users">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-brands')); ?>">
                                <i class="fa fa-tag"></i>Brands</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-categories')); ?>">
                                <i class="fas fa-list-alt"></i>Categories</a>
                        </li>
                        <li>
                            <a href="/manager-products">
                                <i class="fas fa-car"></i>Vehicles</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-orders')); ?>">
                                <i class="fas fa-fax"></i>Reservations</a>
                        </li>
                        <li>
                            <a href="/manager-feedbacks">
                                <i class="fas fa-comments"></i>Feedbacks</a>
                        </li>
                        <!-- <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li> -->
                        <li>
                            <a href="/manager-maps">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li>
                            <form action="/manager/search" method="get" class="form-inline my-2 my-lg-0"
                                style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php if(isset($model)): ?>
                                <select name="search_data" id="select2" class="form-control my-input">
                                    <?php if($model==="all"): ?>
                                    <option class="my-dropdown-input" value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                    <option class="my-dropdown-input" value="users">Users</option>
                                    <option class="my-dropdown-input" value="vehicles">Vehicles</option>
                                    <option class="my-dropdown-input" value="brands">Brands</option>
                                    <option class="my-dropdown-input" value="categories">Categories</option>
                                    <?php elseif($model==="brands"): ?>
                                    <option class="my-dropdown-input" value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                    <option class="my-dropdown-input" value="all">All</option>
                                    <option class="my-dropdown-input" value="users">Users</option>
                                    <option class="my-dropdown-input" value="vehicles">Vehicles</option>
                                    <option class="my-dropdown-input" value="categories">Categories</option>
                                    <?php elseif($model==="users"): ?>
                                    <option class="my-dropdown-input" value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                    <option class="my-dropdown-input" value="all">All</option>
                                    <option class="my-dropdown-input" value="vehicles">Vehicles</option>
                                    <option class="my-dropdown-input" value="brands">Brands</option>
                                    <option class="my-dropdown-input" value="categories">Categories</option>
                                    <?php else: ?>
                                    <option class="my-dropdown-input" value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                    <option class="my-dropdown-input" value="all">All</option>
                                    <option class="my-dropdown-input" value="users">Users</option>
                                    <option class="my-dropdown-input" value="vehicles">Vehicles</option>
                                    <option class="my-dropdown-input" value="brands">Brands</option>
                                    <?php endif; ?>
                                </select>
                                <?php else: ?>
                                <select name="search_data" id="select2" class="form-control my-dropdown-input">
                                    <option class="my-dropdown-input" value="all">All</option>
                                    <option class="my-dropdown-input" value="users">Users</option>
                                    <option class="my-dropdown-input" value="vehicles">Vehicles</option>
                                    <option class="my-dropdown-input" value="brands">Brands</option>
                                    <option class="my-dropdown-input" value="categories">Categories</option>
                                </select>
                                <?php endif; ?>
                                <?php if(isset($param)): ?>
                                <input value="<?php echo e($param); ?>" class="form-control my-input mr-sm-2" name="search_field"
                                    type="search" placeholder="Search" aria-label="Search" />
                                <?php else: ?>
                                <input class="form-control my-input mr-sm-2" name="search_field" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <?php endif; ?>
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
                            <a href="/manager">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-users')); ?>">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-brands')); ?>">
                                <i class="fa fa-tag"></i>Brands</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-categories')); ?>">
                                <i class="fas fa-list-alt"></i>Categories</a>
                        </li>
                        <li>
                            <a href="/manager-products">
                                <i class="fas fa-car"></i>Vehicles</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('manager-orders')); ?>">
                                <i class="fas fa-fax"></i>Reservations</a>
                        </li>
                        <li>
                            <a href="/manager-feedbacks">
                                <i class="fas fa-comments"></i>Feedbacks</a>
                        </li>
                        <!-- <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li> -->
                        <li>
                            <a href="/manager-maps">
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
                            <a class="my-desktop-logo" href="<?php echo e(asset('/manager')); ?>">
                                <img src="<?php echo e(asset('/images/logo/sharewheel-logo.png')); ?>"
                                    style="height:60px;width:150px;" alt="ShareWheel" />
                            </a>
                            <div class="header-button">
                                <form action="/manager/search" method="get"
                                    class="my-search-form form-inline my-2 my-lg-0">
                                    <?php echo csrf_field(); ?>
                                    <?php if(isset($model)): ?>
                                    <select name="search_data" id="select2" class="form-control my-input">
                                        <?php if($model==="all"): ?>
                                        <option value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                        <?php elseif($model==="brands"): ?>
                                        <option value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="categories">Categories</option>
                                        <?php elseif($model==="users"): ?>
                                        <option value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                        <option value="all">All</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                        <?php else: ?>
                                        <option value="<?php echo e($model); ?>"><?php echo e(ucfirst($model)); ?></option>
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <?php endif; ?>
                                    </select>
                                    <?php else: ?>
                                    <select name="search_data" id="select2" class="form-control my-input">
                                        <option value="all">All</option>
                                        <option value="users">Users</option>
                                        <option value="vehicles">Vehicles</option>
                                        <option value="brands">Brands</option>
                                        <option value="categories">Categories</option>
                                    </select>
                                    <?php endif; ?>
                                    <?php if(isset($param)): ?>
                                    <input value="<?php echo e($param); ?>" class="form-control my-input mr-sm-2" name="search_field"
                                        type="search" placeholder="Search" aria-label="Search" />
                                    <?php else: ?>
                                    <input class="form-control my-input mr-sm-2" name="search_field" type="search"
                                        placeholder="Search" aria-label="Search" />
                                    <?php endif; ?>
                                    <button class="btn my-search-button my-2 my-sm-0" title="Search Here!"
                                        type="submit">
                                        Search
                                    </button>
                                </form>
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <!-- Check if there is unread notification -->
                                        <?php if(auth()->user()->unreadNotifications->count() > 0 ): ?>
                                        <span
                                            class="<?php echo e((request()->is('manager-orders')) ? 'd-none' : 'd-block quantity'); ?>"><?php echo e(auth()->user()->unreadNotifications->count()); ?>

                                        </span>
                                        <?php endif; ?>
                                        <div class="notifi-dropdown js-dropdown">
                                            <?php if(auth()->user()->unreadNotifications->count() > 0 ): ?>
                                            <div class="notifi__title">
                                                <p>You have <?php echo e(auth()->user()->unreadNotifications->count()); ?> New
                                                    Bookings</p>
                                            </div>
                                            <?php endif; ?>
                                            <!-- Show the unread notification -->
                                            <div class="notification-scrollble">
                                                <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="/manager/order/order-details-noti/<?php echo e($notification->id); ?>"
                                                    class="text-decoration-none">
                                                    <div class="notifi__item" style="background-color:#d1fff0">
                                                        <div class="img-cir img-40">
                                                            <i class="zmdi zmdi-info"
                                                                style="color:#ebe123;font-size:30px"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p><?php echo e($notification->data['data']); ?>

                                                                <b><?php echo e($notification->data['order_info'][0]['first_name']); ?>

                                                                    <?php echo e($notification->data['order_info'][0]['last_name']); ?></b>
                                                                for
                                                                <b><?php echo e($notification->data['order_info'][0]['vehicle_title']); ?>.</b>
                                                                <br><br><i style="font-size:13px"><a
                                                                        href="/notification/mark-as-read/<?php echo e($notification->id); ?>">Mark
                                                                        as Read
                                                                        <!-- <i class="zmdi zmdi-check" title="Mark as Read" style="font-size:20px;color:#24a0f2"></i> -->
                                                                    </a></i>
                                                            </p>
                                                            <span
                                                                class="date"><?php echo e(\Carbon\Carbon::parse($notification->data['order_info'][0]['created_at'])->format('M-d-Y')); ?></span>
                                                        </div>
                                                    </div>
                                                </a>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <!-- Show the read notification -->
                                                <?php $__currentLoopData = auth()->user()->readNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="/manager/order/order-details-noti/<?php echo e($notification->id); ?>"
                                                    class="text-decoration-none">
                                                    <div class="notifi__item">
                                                        <div class="img-cir img-40">
                                                            <i class="zmdi zmdi-info"
                                                                style="color:#ebe123; font-size:30px"></i>
                                                        </div>
                                                        <div class="content">
                                                            <p style="color:black"><?php echo e($notification->data['data']); ?>

                                                                <b><?php echo e($notification->data['order_info'][0]['first_name']); ?>

                                                                    <?php echo e($notification->data['order_info'][0]['last_name']); ?></b>
                                                                for
                                                                <b><?php echo e($notification->data['order_info'][0]['vehicle_title']); ?>.</b>
                                                                &nbsp;&nbsp;&nbsp;<i class="zmdi zmdi-check-circle"
                                                                    title="Read" style="font-size:20px;"></i></p>
                                                            <span
                                                                class="date"><?php echo e(\Carbon\Carbon::parse($notification->data['order_info'][0]['created_at'])->format('M-d-Y')); ?></span>

                                                        </div>
                                                    </div>
                                                </a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <img src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>"
                                                alt="Manager" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn text-decoration-none"
                                                href="#"><?php echo e(Auth::user()->last_name); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>"
                                                            alt="Manager" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="/manager-account/<?php echo e(Auth::user()->username); ?>"
                                                            class="text-decoration-none"><?php echo e(Auth::user()->first_name); ?>

                                                            <?php echo e(Auth::user()->last_name); ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo e(Auth::user()->email); ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="/manager-account/<?php echo e(Auth::user()->username); ?>">
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
            <?php echo $__env->yieldContent('managerContent'); ?>
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
        <script>
            // Laoding Spinner on buttons
                          (function(){
                              $('.myRegisterForm').on('submit', function(){
                              $('.myRegisterButton').hide();
                              $('#spinner-myRegisterButton').show();
                              $('#spinner-myRegisterButton').attr('disabled', 'true');
                             
                              })
                          })();
        </script>
        <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


</html><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/managerLayout.blade.php ENDPATH**/ ?>