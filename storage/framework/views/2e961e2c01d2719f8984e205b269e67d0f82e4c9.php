

<?php $__env->startSection('content'); ?>

<div class="view">
  <!-- <?php echo e($vehicle->vehicle_title); ?> -->
  <div class="mask rgba-black-light d-flex justify-content-center align-items-center content-div">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" style="width: 100%" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <?php if($vehicle->vehicle_image2!=="no-image.jpg"): ?>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <?php endif; ?>
        <?php if($vehicle->vehicle_image3!=="no-image.jpg"): ?>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <?php endif; ?>
      </ol>

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!-- Content -->
        <div class="text-light wow fadeIn detail-carousel">
          <div class=" text-light ml-5">
            <span class="content-text-header"><strong><?php echo e($vehicle->vehicle_title); ?> | <?php echo e($vehicle->vehicle_brand); ?> |
                <?php echo e($vehicle->vehicle_category); ?></strong></span><br>
            <span class="content-text-body"><i class="green-icon fas fa-cube " id="whiteIcon"></i>
              <?php echo e($vehicle->vehicle_model); ?></span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-users " id="whiteIcon"></i>
              <?php echo e($vehicle->vehicle_seat_number); ?> Seats</span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-closed-captioning " id="whiteIcon"></i>
              <?php echo e($vehicle->vehicle_engine); ?></span>&nbsp;&nbsp;
            <span class="content-text-body"><i class="green-icon fas fa-gas-pump " id="whiteIcon"></i>
              <?php echo e($vehicle->vehicle_fuel_type); ?></span>&nbsp;&nbsp;
            <?php if($ac===true): ?>
            <span class="content-text-body"><i class="green-icon fas fa-snowflake" id="whiteIcon"></i>
              AC</span>&nbsp;&nbsp;
            <?php endif; ?>
            <span class="content-text-body"><i class="green-icon fas fa-coin " id="whiteIcon"></i>
              Rs.<?php echo e($vehicle->vehicle_price); ?></span>&nbsp;&nbsp;

            <span class="float-right mr-5">
              <a href="/wish-list/<?php echo e($vehicle->slug); ?>" role="button" class="btn ml-4 view-detail-button">Wish List</a>
              <?php if($vehicle->vehicle_is_published===1): ?>
              <a href="/checkout/<?php echo e($vehicle->slug); ?>" role="button"
                class="btn view-detail-button ml-3 <?php echo e($vehicle->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
              <?php else: ?>
              <a href="/#" role="button" class="btn view-detail-button ml-3">Not Available</a>
              <?php endif; ?>

            </span>
          </div>
        </div>
        <!-- Content -->

        <!--First slide-->
        <div class="carousel-item active">
          <img class="detail-image d-block " src="/storage/vehicle_images/<?php echo e($vehicle->vehicle_image1); ?>"
            alt="First slide">
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <?php if($vehicle->vehicle_image2!=="no-image.jpg"): ?>
        <div class="carousel-item">
          <img class="detail-image d-block " src="/storage/vehicle_images/<?php echo e($vehicle->vehicle_image2); ?>"
            alt="Second slide">
        </div>
        <?php endif; ?>
        <!--/Second slide-->

        <!--Third slide-->
        <?php if($vehicle->vehicle_image3!=="no-image.jpg"): ?>
        <div class="carousel-item">
          <img class="detail-image d-block " src="/storage/vehicle_images/<?php echo e($vehicle->vehicle_image3); ?>"
            alt="Third slide">
        </div>
        <?php endif; ?>
        <!--/Third slide-->
      </div>
      <!--/.Slides-->

      <!--Controls-->
      <?php if(($vehicle->vehicle_image2!=="no-image.jpg") && ($vehicle->vehicle_image3!=="no-image.jpg")): ?>
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <?php endif; ?>
      <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
  </div>
  <!-- Mask & flexbox options-->
</div>

<!--/First slide-->

<!--/.Carousel Wrapper-->


<!--Main layout-->
<main>
  <div class="container">

    <!--Section: Main info-->
    <?php if($total_recommended_vehicles > 0): ?>
    <section class="mt-5 wow fadeIn">
      <h2 class="my-5 h3 text-center my-text font-weight-bold">RECOMMENDED</h2>
      <!--Grid row-->
      <div class="row">
        <?php $__currentLoopData = $recommended_vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recommended_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
          <div class="card recommended-card" style="width: 20rem;">
            <div class="image-container">
              <img src="/storage/vehicle_images/<?php echo e($recommended_vehicle->vehicle_image1); ?>"
                style="width:20rem; height:14rem" class="card-img-top" alt="...">
              <a href="/view-details/<?php echo e($recommended_vehicle->slug); ?>">
                <div class="overlay">
                  <div class="overlay-button">
                  </div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a class="my-link" href="/view-details/<?php echo e($recommended_vehicle->slug); ?>">
                <b>
                  <p class="card-title my-text text-center" style="font-size: larger">
                    <?php echo e($recommended_vehicle->vehicle_title); ?></p>
                </b>
              </a>
              <p class="card-text my-text text-center  mb-4">
                Rs&nbsp;<?php echo e($recommended_vehicle->vehicle_price); ?>/hr</p>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

      <!--Grid row-->

    </section>

    <hr class="my-5">
    <?php endif; ?>
    <!--Section: Main info-->
    



    <!--Section: symbols-->
    <section>

      <h2 class="my-5 h3 text-center my-text font-weight-bold">SYMBOLIC MEANINGS</h2>

      <!--First row-->
      <div class="row features-small mt-5 wow fadeIn">

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fa fa-cube fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2 pl-3">
              <h5 class="feature-title font-bold mb-1">Model</h5>
              <p class="grey-text mt-2">
                The model of a car is the name used by a manufacturer to market a range of similar cars.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fa fa-users fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Number of seats</h5>
              <p class="grey-text mt-2">
                Depending upon the model and brand there are upto 7 seats available in an average vehicle
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-closed-captioning fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Engine (CC)</h5>
              <p class="grey-text mt-2">
                The engine is the heart of your car. The size of an engine refers to the total volume of air and fuel.
                It's measured in cubic centimetres (cc).
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-gas-pump fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Fuel Type</h5>
              <p class="grey-text mt-2">
                It could either be Diesel, Petrol or Hybrid (Diesel & Petrol)
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

      </div>
      <!--/First row-->

      <!--Second row-->
      <div class="row features-small mt-4 wow fadeIn">

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-coin fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Price</h5>
              <p class="grey-text mt-2">
                The amount depending on the car and number of days to be booked. Here booking is done on the basis of
                per hour.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-snowflake fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">A/C</h5>
              <p class="grey-text mt-2">
                Among the various attributes of a vehicle, Air Conditioner is one of them. It is moslty available in all
                the vehicles nowadays
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fas fa-steering-wheel fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Power Steering</h5>
              <p class="grey-text mt-2">
                A power steering system helps drivers steer the vehicle by
                augmenting steering effort needed to turn the steering wheel, making it easier for the vehicle to turn
                or maneuver.
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="green-icon fab fa-bluetooth-b fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Bluetooth</h5>
              <p class="grey-text mt-2">
                It lets you connect your phone to your car's system, providing a total wireless access to the functions
                of your phone
              </p>
            </div>
          </div>
          <!--/Grid row-->
        </div>
        <!--/Grid column-->

      </div>
      <!--/Second row-->

    </section>
    <!--Section: Symbols-->

    <hr class="my-5">

    <!--Section: Main features & Quick Start-->
    <section class="pb-5">

      <h3 class="h3 text-center mb-5 my-text font-weight-bold">ABOUT SHAREWHEEL</h3>

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 px-4">

          <!--First row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-car fa-2x indigo-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">New Venture</h5>
              <p class="grey-text">With a fresh idea, <i>Sharewheel</i> comes to us as a savior, while travelling a long
                or short distances in any situation</p>

            </div>
          </div>
          <!--/First row-->

          <div style="height:30px"></div>

          <!--Second row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-book fa-2x blue-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">Detailed documentation</h5>
              <p class="grey-text">For a detailed description and documentation on how <i>Sharewheel</i> functions, the
                requirement to join <i>Sharewheel</i>
                and the terms and conditions to agree upon, a document file will be uploaded soon.
              </p>
              <a target="_blank" href="<?php echo e(asset('/inputgroup.pdf')); ?>" class="btn btn-grey btn-md">Download
                <i class="green-icon fas fa-download"></i>
              </a>
            </div>
          </div>
          <!--/Second row-->

          <div style="height:30px"></div>

          <!--Third row-->
          <div class="row">
            <div class="col-1 mr-3">
              <i class="green-icon fas fa-graduation-cap fa-2x cyan-text"></i>
            </div>
            <div class="col-10">
              <h5 class="feature-title">Quick and short tutorial</h5>
              <p class="grey-text">Sparing a short time, you could also play the video on the right to get a hang og the
                website. It is surely a simple procedure! We Promise 😀</p>
            </div>
          </div>
          <!--/Third row-->

        </div>
        <!--/Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12">

          <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bzmFBeOLrDg"
              allowfullscreen></iframe>
          </div>
        </div>
        <!--/Grid column-->

      </div>
      <!--/Grid row-->

    </section>
    <!--Section: Main features & Quick Start-->

    

    
  </div>
</main>
<!--Main layout-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/view-details.blade.php ENDPATH**/ ?>