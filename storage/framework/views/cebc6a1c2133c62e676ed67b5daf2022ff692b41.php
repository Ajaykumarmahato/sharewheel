

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row pt-3 my-ad-carousel">
    <div class="col-lg-4 col-md-4 col-sm-6 col-12 single-img-gallery my-ad-carousel">
      <a href="<?php echo e(asset('/images/gridslider/my-sharewheel-ad.png')); ?>" target="_blank">
        <img src="<?php echo e(asset('/images/gridslider/my-sharewheel-ad.png')); ?>" class="my-ad-image img-fluid"
          style="width:370px;height:500px" alt="">
      </a>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 col-12 my-ad-carousel">
      <div id="carouselExampleFade" class="carousel slide carousel-fade mb-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo e(asset('/images/carousel/car3.jpeg')); ?>" class="my-image d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <video class="video-fluid my-image" autoplay loop muted>
              <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="carousel-item">
            <img src="<?php echo e(asset('/images/carousel/car4.jpg')); ?>" class="my-image d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            
            <img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="my-image d-block w-100"
              alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Featured products  -->
  <div class="row mt-5">
    <div class="col-lg-12 text-center">
      <h3 class="my-text">Featured Items</h3>
      <ul class="nav md-pills nav-justified pills-pink my-dropdown mt-5" id="pills-tab" role="tablist">
        <?php $__currentLoopData = $featured_categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item ">
          <a class="nav-link my-pills-text" id="pills-<?php echo e($featured_category->category); ?>-tab" data-toggle="pill"
            href="#pills-<?php echo e($featured_category->category); ?>" role="tab"
            aria-controls="pills-<?php echo e($featured_category->category); ?>"
            aria-selected="true"><?php echo e($featured_category->category); ?></a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <div class="tab-content pt-2 pl-1 mt-4" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-SUV" role="tabpanel" aria-labelledby="pills-SUV-tab">
          <div class="row my-featured-vehicle">
            <?php $__currentLoopData = $featured_suvs ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_suv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 my-featured-vehicle-list">
              <div class="card vehicle-card category-card" style="width: 20rem;">
                <div class="image-container">
                  <img src="/storage/vehicle_images/<?php echo e($featured_suv->vehicle_image1); ?>" class="card-img-top"
                    style="width:20rem; height:14rem;" alt="...">
                  <a href="/view-details/<?php echo e($featured_suv->slug); ?>">
                    <div class="overlay">
                      <div class="overlay-button">

                      </div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a class="my-link" href="/view-details/<?php echo e($featured_suv->slug); ?>">
                    <h5 class="card-title my-text"><?php echo e($featured_suv->vehicle_title); ?></h5>
                  </a>
                  <p class="card-text my-text">Rs&nbsp;<?php echo e($featured_suv->vehicle_price); ?>/hr</p>
                  <a href="/wish-list/<?php echo e($featured_suv->slug); ?>" class="btn my-button ml-4">Wish List</a>
                  <a href="/checkout/<?php echo e($featured_suv->slug); ?>" role="button"
                    class="btn my-button ml-3 <?php echo e($featured_suv->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="tab-pane fade show" id="pills-Sanitized" role="tabpanel" aria-labelledby="pills-Sanitized-tab">
          <div class="row my-featured-vehicle">
            <?php $__currentLoopData = $featured_sanitizeds ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_sanitized): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 my-featured-vehicle-list">
              <div class="card vehicle-card category-card" style="width: 20rem;">
                <div class="image-container">
                  <img src="/storage/vehicle_images/<?php echo e($featured_sanitized->vehicle_image1); ?>" class="card-img-top"
                    style="width:20rem; height:14rem;" alt="...">
                  <a href="/view-details/<?php echo e($featured_sanitized->slug); ?>">
                    <div class="overlay">
                      <div class="overlay-button">

                      </div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a class="my-link" href="/view-details/<?php echo e($featured_sanitized->slug); ?>">
                    <h5 class="card-title my-text"><?php echo e($featured_sanitized->vehicle_title); ?></h5>
                  </a>
                  <p class="card-text my-text">Rs&nbsp;<?php echo e($featured_sanitized->vehicle_price); ?>/hr</p>
                  <a href="/wish-list/<?php echo e($featured_sanitized->slug); ?>" class="btn my-button ml-4">Wish List</a>
                  <a href="/checkout/<?php echo e($featured_sanitized->slug); ?>" role="button"
                    class="btn my-button ml-3 <?php echo e($featured_sanitized->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="tab-pane fade show" id="pills-Electric" role="tabpanel" aria-labelledby="pills-Electric-tab">
          <div class="row my-featured-vehicle">
            <?php $__currentLoopData = $featured_electrics ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_electric): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 my-featured-vehicle-list">
              <div class="card vehicle-card category-card" style="width: 20rem;">
                <div class="image-container">
                  <img src="/storage/vehicle_images/<?php echo e($featured_electric->vehicle_image1); ?>" class="card-img-top"
                    style="width:20rem; height:14rem;" alt="...">
                  <a href="/view-details/<?php echo e($featured_electric->slug); ?>">
                    <div class="overlay">
                      <div class="overlay-button">

                      </div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a class="my-link" href="/view-details/<?php echo e($featured_electric->slug); ?>">
                    <h5 class="card-title my-text"><?php echo e($featured_electric->vehicle_title); ?></h5>
                  </a>
                  <p class="card-text my-text">Rs&nbsp;<?php echo e($featured_electric->vehicle_price); ?>/hr</p>
                  <a href="/wish-list/<?php echo e($featured_electric->slug); ?>" class="btn my-button ml-4">Wish List</a>
                  <a href="/checkout/<?php echo e($featured_electric->slug); ?>" role="button"
                    class="btn my-button ml-3 <?php echo e($featured_electric->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="tab-pane fade show" id="pills-Convertibles" role="tabpanel"
          aria-labelledby="pills-Convertibles-tab">
          <div class="row my-featured-vehicle">
            <?php $__currentLoopData = $featured_convertibles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_convertible): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 my-featured-vehicle-list">
              <div class="card vehicle-card category-card" style="width: 20rem;">
                <div class="image-container">
                  <img src="/storage/vehicle_images/<?php echo e($featured_convertible->vehicle_image1); ?>" class="card-img-top"
                    style="width:20rem; height:14rem;" alt="...">
                  <a href="/view-details/<?php echo e($featured_convertible->slug); ?>">
                    <div class="overlay">
                      <div class="overlay-button">

                      </div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a class="my-link" href="/view-details/<?php echo e($featured_convertible->slug); ?>">
                    <h5 class="card-title my-text"><?php echo e($featured_convertible->vehicle_title); ?></h5>
                  </a>
                  <p class="card-text my-text">Rs&nbsp;<?php echo e($featured_convertible->vehicle_price); ?>/hr</p>
                  <a href="/wish-list/<?php echo e($featured_convertible->slug); ?>" class="btn my-button ml-4">Wish List</a>
                  <a href="/checkout/<?php echo e($featured_convertible->slug); ?>" role="button"
                    class="btn my-button ml-3 <?php echo e($featured_convertible->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="tab-pane fade show" id="pills-Coupes" role="tabpanel" aria-labelledby="pills-Coupes-tab">
          <div class="row my-featured-vehicle">
            <?php $__currentLoopData = $featured_coupes ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured_coupe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 my-featured-vehicle-list">
              <div class="card vehicle-card category-card" style="width: 20rem;">
                <div class="image-container">
                  <img src="/storage/vehicle_images/<?php echo e($featured_coupe->vehicle_image1); ?>" class="card-img-top"
                    style="width:20rem; height:14rem;" alt="...">
                  <a href="/view-details/<?php echo e($featured_coupe->slug); ?>">
                    <div class="overlay">
                      <div class="overlay-button">

                      </div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  <a href="/view-details/<?php echo e($featured_coupe->slug); ?>">
                    <h5 class="card-title my-text"><?php echo e($featured_coupe->vehicle_title); ?></h5>
                  </a>
                  <p class="card-text my-text">Rs&nbsp;<?php echo e($featured_coupe->vehicle_price); ?>/hr</p>
                  <a href="/wish-list/<?php echo e($featured_coupe->slug); ?>" class="btn my-button ml-4">Wish List</a>
                  <a href="/checkout/<?php echo e($featured_coupe->slug); ?>" role="button"
                    class="btn my-button ml-3 <?php echo e($featured_coupe->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured products end -->

  <!-- Our Vehicles -->
  <div class="row our-vehicle-section">
    <div class="col-4"></div>
    <div class="col-4 text-center">
      <h3 class="my-text">Our Vehicles</h3>
    </div>
    <div class="col-4"></div>
  </div>
  <div class="row my-vehicle-list">
    <?php $__currentLoopData = $vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-4 mb-5">
      <div class="card vehicle-card" style="width: 20rem;">
        <div class="image-container">
          <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>" style="width:20rem; height:14rem"
            class="card-img-top" alt="...">
          <a href="/view-details/<?php echo e($vehicle->slug); ?>">
            <div class="overlay">
              <div class="overlay-button">
              </div>
            </div>
          </a>
        </div>
        <div class="card-body">
          <a class="my-link" href="/view-details/<?php echo e($vehicle->slug); ?>">
            <h5 class="card-title my-text text-center"><?php echo e($vehicle->vehicle_title); ?></h5>
          </a>
          <p class="card-text my-text text-center  mb-4">Rs&nbsp;<?php echo e($vehicle->vehicle_price); ?>/hr</p>
          <a href="/wish-list/<?php echo e($vehicle->slug); ?>" class="btn my-button ml-4">Wish List</a>
          <a href="/checkout/<?php echo e($vehicle->slug); ?>" role="button"
            class="btn my-button ml-3 <?php echo e($vehicle->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Reserve</a>

        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <div class="row">
    <a href="/all-vehicles" class="mx-auto my-view-more-button"><button class="btn my-button">View More <i
          class="fa fa-chevron-down text-light"></i></button></a>
  </div>
  <!-- Our Vehicles End -->
</div>
<!-- Testimonials -->
<?php if($review_count > 0): ?>
<div class="row our-vehicle-section" style="width:100%">
  <div class="col-4"></div>
  <div class="col-4 text-center">
    <h3 class="my-text">Testimonials</h3>
  </div>
  <div class="col-4"></div>
</div>


<!-- Testimonials Section -->
<!-- Section: Testimonials v.2 -->
<div class="container">
  <section class="text-center my-5">

    <!-- Section heading -->

    <div class="wrapper-carousel-fix">
      <!-- Carousel Wrapper -->
      <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade"
        data-ride="carousel" data-interval="false">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <?php $__currentLoopData = $reviews ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="carousel-item <?php echo e($loop->iteration === 1 ? 'active' : ''); ?>">
            <div class="testimonial">
              <!--Avatar-->
              <div class="avatar mx-auto mb-4">
                <img src="<?php echo e(asset('/images/testimonial.jpg')); ?>" class="rounded-circle img-fluid" alt="">
              </div>
              <!--Content-->
              <p style="font-size: large">
                <i class="fas fa-quote-left"></i>&nbsp;<?php echo e($review->message); ?>&nbsp;<i class="fas fa-quote-right"></i>
              </p>
              <h4 class="font-weight-bold"><?php echo e($review->first_name); ?></h4>
              <h6 class="my-3"> <i class="fa fa-clock-o text-dark"></i>
                <?php echo e(\Carbon\Carbon::parse($review->created_at)->format('M-d-Y')); ?> at
                <i style="color:black !important;"><?php echo e($review->created_at->toTimeString()); ?></i></h6>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
        <!--Controls-->
      </div>
      <!-- Carousel Wrapper -->
    </div>

  </section>
</div>
<?php endif; ?>
<!-- Section: Testimonials v.2 -->
<!-- Testimonials End -->
<div class="container">
  <!-- Associates Grid Slider -->
  <div class="row pt-4 our-vehicle-section">
    <div class="col-4"></div>
    <div class="col-4 text-center">
      <h3 class="my-text">Our Associates</h3>
    </div>
    <div class="col-4"></div>
  </div>
  <div class="row mx-auto my-grid-carousel">
    <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="row my-grid-carousel-row">
            <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->iteration <=4): ?> <div class="col-sm-3 my-grid-carousel-column">
              <div class="card my-grid-card-1">
                <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
                    class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
                    alt="Card image cap"> </a>
              </div>
          </div>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row my-grid-carousel-row">
          <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($loop->iteration >=5 && $loop->iteration <=8): ?> <div class="col-sm-3 my-grid-carousel-column">
            <div class="card my-grid-card-1">
              <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
                  class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
                  alt="Card image cap"> </a>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row my-grid-carousel-row">
        <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->iteration >=9 && $loop->iteration <=12): ?> <div class="col-sm-3 my-grid-carousel-column">
          <div class="card my-grid-card-1">
            <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
                class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
                alt="Card image cap"> </a>
          </div>
      </div>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="carousel-item">
    <div class="row my-grid-carousel-row">
      <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($loop->iteration >=13 && $loop->iteration <=16): ?> <div class="col-sm-3 my-grid-carousel-column">
        <div class="card my-grid-card-1">
          <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
              class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
              alt="Card image cap"> </a>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<div class="carousel-item">
  <div class="row my-grid-carousel-row">
    <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->iteration >=17 && $loop->iteration <=20): ?> <div class="col-sm-3 my-grid-carousel-column">
      <div class="card my-grid-card-1">
        <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
            class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
            alt="Card image cap"> </a>
      </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<div class="carousel-item">
  <div class="row my-grid-carousel-row">
    <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->iteration >=21 && $loop->iteration <=24): ?> <div class="col-sm-3 my-grid-carousel-column">
      <div class="card my-grid-card-1">
        <a href="<?php echo e($brand->brand_link); ?>" title="<?php echo e($brand->brand); ?>" target="__blank"><img
            class="card-img-top my-grid-card-img" src="/storage/brand_images/<?php echo e($brand->brand_image); ?>"
            alt="Card image cap"> </a>
      </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<div class="carousel-item">
  <div class="row my-grid-carousel-row">
    <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->iteration >=25 && $loop->iteration <=28): ?> <div class="col-sm-3 my-grid-carousel-column">
      <div class="card my-grid-card-1">
        <a href="<?php echo e($brand->brand_link); ?>" target="__blank"><img class="card-img-top my-grid-card-img"
            src="/storage/brand_images/<?php echo e($brand->brand_image); ?>" alt="Card image cap"> </a>
      </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

<div class="carousel-item">
  <div class="row my-grid-carousel-row">
    <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->iteration >=29 && $loop->iteration <=31): ?> <div class="col-sm-3 my-grid-carousel-column">
      <div class="card my-grid-card-1">
        <a href="<?php echo e($brand->brand_link); ?>" target="__blank"><img class="card-img-top my-grid-card-img"
            src="/storage/brand_images/<?php echo e($brand->brand_image); ?>" alt="Card image cap"> </a>
      </div>
  </div>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>


</div>
</div>
</div>
<!-- Grid Slider End -->

<div class="row mt-5 mb-5"></div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/home.blade.php ENDPATH**/ ?>