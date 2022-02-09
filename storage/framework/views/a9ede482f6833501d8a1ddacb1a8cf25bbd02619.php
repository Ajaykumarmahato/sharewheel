<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShareWheel</title>
    <!-- Bootstrap css -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- ShareWheel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/sharewheel.css')); ?>" />

    <!-- Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"
  ></script>


</head>


<body>
    <!-- Header Section -->
    <!-- Header top -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-4 pb-4 ml-2">
      <a href="" class="top-item my-link"
      ><i class="fa fa-envelope ml-5"> sharewheel2020@gmail.com</i></a
      >
      <span class="ml-3 my-text"> Free oil for the ride!</span>
        <div class="icons ml-auto">
          <a class="my-link" href=""><i class="fa fa-facebook ml-5 mr-3"></i></a>
          <a class="my-link" href=""><i class="fa fa-instagram mr-3"></i></a>
          <a class="my-link" href=""><i class="fa fa-twitter mr-3"></i></a>
          <a class="my-link" href=""><i class="fa fa-pinterest mr-5"></i></a>

          <span class="mr-5 my-text"><i class="mr-4">Total:</i> <b>Rs 255</b></span>
        </div>
    </nav>
    <!-- Header body -->
    <nav class="navbar my-header-bg navbar-expand-lg sticky-top">
      <a class="navbar-brand" style="margin-left: 7px;" href="<?php echo e(asset('/')); ?>">
      <img class="my-logo ml-5" src="<?php echo e(asset('/images/logo/logo.png')); ?>" />
      </a>
      <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
      style="background-color: #01a99d;"
      >
      <span class="navbar-toggler-icon">
      <i class="fa fa-arrow-down text-light pt-2"></i>
      </span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          <a  href="<?php echo e(asset('/about-us')); ?>" class="<?php echo e(Request::is('/about-us') ? 'nav-link my-link current-page':'nav-link my-link'); ?>">About Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link my-link" href="<?php echo e(asset('/contact')); ?>">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
          <a
          class="nav-link my-link dropdown-toggle"
          href="#"
          id="navbarDropdown"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          >
          Brands
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item my-link" href="#">Acura</a>
            <a class="dropdown-item my-link" href="#">Toyota</a>
            <a class="dropdown-item my-link" href="#">Kia Motors</a>
            <a class="dropdown-item my-link" href="#">GMC</a>
            <a class="dropdown-item my-link" href="#">Honda</a>
            <a class="dropdown-item my-link" href="#">Ford</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item my-link" href="#">Others</a>
              </div>
              </li>
              <li class="nav-item">
              <a class="nav-link my-link" href="<?php echo e(asset('/faq')); ?>">FAQs</a>
              </li>
              <li class="nav-item">
              <a
              class="nav-link disabled my-link"
              href="#"
              tabindex="-1"
              aria-disabled="true"
              >New Offers</a
              >
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            />
            <button class="btn my-button my-2 my-sm-0 mr-5" type="submit">
            Search
            </button>
          </form>
          <span class="form-inline my-2 my-lg-0">
            <i class="fa fa-heart mr-4 fa-x"></i>
            <i class="fa fa-shopping-cart fa-x mr-4"></i>
            <i class="fa fa-book fa-x mr-4"></i>
            <i class="fa fa-home fa-x mr-5"></i>
            <a href="<?php echo e(asset('/login')); ?>" class="my-link text-decoration-none mr-3"
          ><i class="fa fa-user mr-2"></i>Login</a
          >
          <a class="text-decoration-none mr-5 my-link" href="<?php echo e(asset('/sign-up')); ?>">Signup</a>
            
          </span>
        </div>
      </nav>
<!-- Header Section End -->

    <!-- Content Section -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Content Section end -->
  

   <!-- Footer Section -->
   <footer class="page-footer font-small my-dropdown pt-4">
      <!-- Footer Links -->
      <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 mx-auto mr-5">
            <!-- Logo-->
           <a href="<?php echo e(asset('/')); ?>"><img class="my-logo mt-3" src="<?php echo e(asset('/images/logo/logo.png')); ?>" alt=""></a> 
            

            
          </div>

          <div class="col-md-3  mx-auto">
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
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 my-text">
              Brands
            </h5>

            <ul class="list-unstyled ">
              <li>
                <a class="my-link" href="#!">Toyota</a>
              </li>
              <li>
                <a class="my-link" href="#!">Hyundai</a>
              </li>
              <li>
                <a class="my-link" href="#!">Ford</a>
              </li>
              <li>
                <a class="my-link" href="#!">Maruti Suzuki</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 my-text">
              Contact Us
            </h5>

            <ul class="list-unstyled my-text">
              <li>
              Phone Number: +977 9845867602,
              
                 5150094
              </li>
              <li>
              Email: <a class="my-link text-decoration-none" href="#"> sharewheel2020@gmail.com</a>
              </li>
              <li>
                <a href="#"></a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none" />

          <!-- Grid column -->
         
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->

      <hr />

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1 my-text">Register for free</h5>
        </li>
        <li class="list-inline-item">
          <a href="<?php echo e(asset('/sign-up')); ?>" class="btn my-button">Sign up!</a>
        </li>
      </ul>
      <!-- Call to action -->

      <hr />

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="my-link btn-floating btn-fb mx-1">
            <i class="fa fa-facebook-square fa-2x"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="my-link btn-floating btn-tw mx-1">
            <i class="fa fa-twitter-square fa-2x"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="my-link btn-floating btn-gplus mx-1">
            <i class="fa fa-instagram fa-2x"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="my-link btn-floating btn-li mx-1">
            <i class="fa fa-pinterest-square fa-2x"> </i>
          </a>
        </li>
        
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="mini-footer footer-copyright text-center py-3 my-text sticky-top" style="font-size:small;">
        © 2020 Copyright:
        All rights reserved by Ajay and Priansu
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer Section End -->
</body>
</html><?php /**PATH C:\MajorProject\ShareWheel\resources\views/layout.blade.php ENDPATH**/ ?>