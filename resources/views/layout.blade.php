<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShareWheel</title>
  {{-- Shortcut Icon --}}
  <link rel="shortcut icon" href="{{asset('/images/logo/shortcut-logo.png')}}">
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- image viewer css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
    crossorigin="anonymous" />

  <!-- ShareWheel CSS -->
  <link rel="stylesheet" href="{{ asset('/css/sharewheel.css') }}" />

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  {{-- google fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="{{ asset('/js/sharewheel.js') }}" type="text/javascript"></script>
</head>

<body onload="myPreloader()">
  <!-- Preloader -->
  <div id="loading"
    style="position:fixed; background: rgba(255, 255, 255, 0.7) url('{{ asset('/images/loading/eclipse-preloader.gif')}}') no-repeat center ;">
  </div>

  <!-- Header Section -->
  <!-- Header top -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light ml-2 mini-navbar">
    <a href="mailto:sharewheel2020@gmail.com" class="top-item my-link"><i class="fa fa-envelope ml-5 my-link"></i>
      sharewheel2020@gmail.com</a>
    <span class="ml-3 my-text">&nbsp;Trust us, we can share you a ride!</span>
    <div class="icons ml-auto">
      <a class="Facebook" href="#"><i title=" Facebook" class="fab fa-facebook ml-5 mr-3"></i></a>
      <a class="Twitter" href="#"><i title="Twitter" class="fab fa-twitter mr-3"></i></a>
      <a class="Instagram" href="#"><i title="Instagram" class="fab fa-instagram mr-3"></i></a>
      <a class="Youtube" href="#"><i title="Youtube" class="fab fa-youtube mr-5"></i></a>
      @auth
      <span class="mr-5 my-text"><i class="mr-4">Total:</i> <b>Rs {{ $grand_total_price }}</b></span>
      @endauth
    </div>
  </nav>
  <!-- Header body -->
  <nav class="navbar main-navbar-bg navbar-expand-lg sticky-top">
    <a class="navbar-brand" href="{{ asset('/') }}">
      <img class="my-header-logo" src="{{ asset('/images/logo/sharewheel-logo.png') }}" />
    </a>
    <button class="navbar-toggler my-toggle-btn" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation" style="background-color: #01a99d;">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars text-light pt-1"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="{{ (request()->is('all-vehicles')) ? 'my-active-link' : 'nav-item' }} ">
          <a class="nav-link my-link" href="{{ asset('/all-vehicles') }}">All Vehicles</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link my-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Brands</a>
          <div class="dropdown-menu my-brands-dropdown scrollable-menu" role="menu" aria-labelledby="navbarDropdown">
            @foreach($brands ?? '' as $brand)
            <a class="dropdown-item my-focus" href="/branded-vehicles/{{$brand->brand}}">{{$brand->brand}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link my-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Categories</a>
          <div class="dropdown-menu my-brands-dropdown scrollable-menu" aria-labelledby="navbarDropdown">
            @foreach($categories ?? '' as $category)
            <a class="dropdown-item my-focus"
              href="/categorized-vehicles/{{$category->category}}">{{$category->category}}</a>
            @endforeach
          </div>
        </li>
        <li class="{{ (request()->is('about-us')) ? 'my-active-link' : 'nav-item' }} ">
          <a href="{{ asset('/about-us') }}" class="nav-link my-link">About Us</a>
        </li>
        <li class="{{ (request()->is('contact-us')) ? 'my-active-link' : 'nav-item' }} ">
          <a class="nav-link my-link" href="{{ asset('/contact-us') }}">Contact Us</a>
        </li>
        <li class="{{ (request()->is('faq')) ? 'my-active-link' : 'nav-item' }} ">
          <a class="nav-link my-link" href="{{ asset('/faq') }}">FAQs</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled my-link" href="#" tabindex="-1" aria-disabled="true">New Offers</a>
        </li> --}}
      </ul>
      @if(isset($details))
      <form method="GET" action="/product-search" class="form-inline my-2 my-lg-0">
        <input class="form-control my-search-form mr-sm-2" type="search" value="{{ $query }}" name="keyword"
          placeholder="Search" aria-label="Search" />
        <button class="btn my-search-button my-2 my-sm-0" title="Click Here to Search!" type="submit">
          Search
        </button>
      </form>
      @else
      <form method="GET" action="/product-search" class="form-inline my-2 my-lg-0">
        <input class="form-control my-search-form mr-sm-2" type="search" name="keyword" placeholder="Search"
          aria-label="Search" />
        <button class="btn my-search-button my-2 my-sm-0" title="Click Here to Search!" type="submit">
          Search
        </button>
      </form>
      @endif
      <span class="form-inline my-2 my-lg-0">
        @auth
        <a href="/wish-list" class="green-icon"><i title="Wishlist" class="fa fa-heart fa-x mr-4"></i></a>
        <a href="/my-booking" class="green-icon"><i title="Reserve" class="fa fa-handshake-o fa-x mr-4"></i></a>

        @endauth
        <!-- <i title="Wishlist" class="fa fa-star mr-4 fa-x"></i> -->
        @guest
        <a href="{{ asset('/login') }}" class="my-link text-decoration-none mr-3"><i title="Login Here!"
            class="fa fa-user mr-2"></i>Login</a>
        @if (Route::has('register'))
        <a class="text-decoration-none mr-5 my-link" href="{{ asset('/register') }}">
          <i class="fa fa-sign-in"></i>
          Signup</a>
        @endif

        @else
        <a id="navbarDropdown" class="my-link my-responsive-logged-in dropdown-toggle" href="#" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          <img class="my-profile-image " src="/storage/user_profile_images/{{ Auth::user()->profile_image }}" alt="">
          {{ Auth::user()->first_name }} <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right my-dropdown my-login-dropdown" aria-labelledby="navbarDropdown"
          style="width:200px">
          <a class="my-text-hover dropdown-item my-dropdown" href="{{ route('user-account', Auth::user()->username) }}">
            <i class="fa fa-user mr-2"></i>{{ __('Account') }}
          </a>
          <hr class="mr-2">
          <a class="my-text-hover dropdown-item my-dropdown pb-2" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off mr-2"></i> {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
        @endguest
      </span>
    </div>
  </nav>
  <!-- Header Section End -->

  <!-- Content Section -->
  @yield('content')
  <!-- Content Section end -->

  <!-- Footer Section -->
  <footer class="page-footer font-small my-dropdown pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <!-- Grid row -->
      <div class="row pb-4">
        <div class="col-md-2">
          <!-- Logo-->
          <a href="{{asset('/')}}"><img class="my-logo mt-3" src="{{asset('/images/logo/sharewheel-logo.png')}}"
              alt=""></a>
        </div>
        <div class="col-md-3 mx-auto">
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4  my-text">
            About Us
          </h5>
          <p class="my-text text-justify">
            ShareWheel is the online facility to book cars online within few
            clicks only. This system includes various vehicle, as per the
            customer order and comfort, it place the order and deliver the
            vehicle as per the location within the area.
          </p>
        </div>
        <hr class="clearfix w-100 d-md-none" />
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 my-text">
            Categories
          </h5>
          <ul class="list-unstyled footer-scrollable-menu" role="menu">
            @foreach($categories ?? '' as $category)
            <a class="dropdown-item my-focus"
              href="/categorized-vehicles/{{$category->category}}">{{$category->category}}</a>
            @endforeach
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none" />
        <div class="col-md-2 mx-auto">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 my-text">
            Brands
          </h5>
          <ul class="list-unstyled footer-scrollable-menu" role="menu">
            @foreach($brands ?? '' as $brand)
            <a class="dropdown-item my-focus" href="/branded-vehicles/{{$brand->brand}}">{{$brand->brand}}</a>
            @endforeach
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none" />
        <div class="col-md-3">
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4 my-text">
            Contact Us
          </h5>
          <ul class="list-unstyled my-text">
            <li>
              Phone Number: +977 <br>
              9845867602, 5150094
            </li>
            <li>
              <a class="my-link text-decoration-none" href="mailto:sharewheel2020@gmail.com">
                sharewheel2020@gmail.com</a>
            </li>
            <li>
              <a class="my-pills-text text-decoration-none" href="{{ asset('/contact-us') }}/#leave_message">Leave a
                Message! <i class="fa fa-paper-plane"></i> </a>
            </li>
          </ul>
        </div>
        <hr class="w-100 d-md-none" />
        <!-- Grid column -->
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->

    @guest
    <hr class="my-hr" />
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1 my-text">Register for free!</h5>
      </li>
      <li class="list-inline-item">
        <a href="{{ asset('/register') }}" title="Register Here!" class="btn view-detail-button-v2">
          <i class="fa fa-sign-in" style="color:#01a99d"></i>&nbsp;
          Sign up!</a>
      </li>
    </ul>
    <hr />
    @endguest
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center pt-2 pb-2">
      <li class="list-inline-item">
        <a class="Facebook btn-floating btn-fb mx-1" href="#">
          <i title="Facebook" class="fab fa-facebook-square fa-2x"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="Twitter btn-floating btn-tw mx-1" href="#">
          <i title="Twitter" class="fab fa-twitter-square fa-2x"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="Instagram btn-floating btn-gplus mx-1" href="#">
          <i title="Instagram" class="fab fa-instagram fa-2x"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="Youtube btn-floating btn-li mx-1" href="#">
          <i title="Youtube" class="fab fa-youtube fa-2x"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
    <!-- Copyright -->
    <div class="mini-footer footer-copyright text-center py-3 my-text" style="font-size:small;">
      © 2020 Copyright:
      All rights reserved by Ajay and Priansu
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer Section End -->
  <!-- Scroll Top Button -->
  <button onclick="scrollToTop()" id="scroll-btn" title="Go to top">
    <i style="color:white" class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>
  <!-- Scroll Top Button End -->
  <script>
    // Laoding Spinner on buttons
      (function(){
          $('.myRegisterForm').on('submit', function(){
          $('.myRegisterButton').hide();
          $('.spinner-myRegisterButton').attr('disabled', 'true');
          $('.spinner-myRegisterButton').show();
          })
      })();
       //swal test
    $('#clickme').click(function(){
        console.log('hsvcjh');
        Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Save`,
        denyButtonText: `Don't save`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    });
  </script>
  <!-- image viewer -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous"></script>
  @include('sweetalert::alert')
</body>

</html>