


<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row mt-4"></div>
    <div class="row mt-5">
        <div class="col-lg-4">
          <div class="btn-group">
            <button
              class="btn my-accordion-button"
              type="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Categories
            </button>
            <div class="dropdown-menu show my-dropdown">
              
              <li class="my-list">Pick Up</li>
              <li class="my-list">Sanitised</li>
              <li class="my-list">SUV</li>
              <li class="my-list">Odd</li>
              <li class="my-list">Even</li>
              <li class="my-list">Electric</li>
              <li class="my-list">4 seater</li>
              <li class="my-list">7 seater</li>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo e(asset('/images/carousel/car3.jpeg')); ?>" class="my-image d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/images/carousel/car1.jpeg')); ?>" class="my-image d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/images/carousel/car4.jpg')); ?>" class="my-image d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="<?php echo e(asset('/images/carousel/car5.jpg')); ?>" class="my-image d-block w-100" alt="..." />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleFade"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleFade"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row mt-5 mb-5"></div>
      <!-- Featured products  -->
      
    <div class="row mt-5">
      <div class="col-lg-12 text-center">
          <h3 class="my-text">Featured Product</h3>
          <ul class="nav md-pills nav-justified pills-pink my-dropdown mt-5" id="pills-tab" role="tablist">
              <li class="nav-item ">
                <a class="nav-link active my-pills-text" id="pills-pickup-tab" data-toggle="pill" href="#pills-pickup" role="tab"
                  aria-controls="pills-pickup" aria-selected="true">Pick Up</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link my-pills-text" id="pills-suv-tab" data-toggle="pill" href="#pills-suv" role="tab"
                  aria-controls="pills-suv" aria-selected="false">SUV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link my-pills-text" id="pills-seater-tab" data-toggle="pill" href="#pills-seater" role="tab"
                  aria-controls="pills-seater" aria-selected="false">4 Seater</a>
              </li>
              <li class="nav-item">
                <a class="nav-link my-pills-text" id="pills-electric-tab" data-toggle="pill" href="#pills-electric" role="tab"
                  aria-controls="pills-electric" aria-selected="false">Electric</a>
              </li>
          </ul>
      <div class="tab-content pt-2 pl-1 mt-4" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-pickup" role="tabpanel" aria-labelledby="pills-pickup-tab">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('/images/categories/pickup.jpg')); ?>" class="card-img-top" style="width:auto; height:14rem;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text">Pick Up</h5>
                    <p class="card-text my-text">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>
</div>
              <div class="tab-pane fade" id="pills-suv" role="tabpanel" aria-labelledby="pills-suv-tab">
              <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('/images/categories/suv.jpg')); ?>" class="card-img-top" style="width:auto; height:14rem" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text">SUV</h5>
                    <p class="card-text my-text">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>

              </div>
              <div class="tab-pane fade" id="pills-seater" role="tabpanel" aria-labelledby="pills-seater-tab">
              <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('/images/categories/seater.jpg')); ?>"  style="width:auto; height:14rem" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text">4 Seater</h5>
                    <p class="card-text my-text">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>
              </div>
                <div class="tab-pane fade" id="pills-electric" role="tabpanel" aria-labelledby="pills-electric-tab">
                <div class="card" style="width: 18rem;">
                  <img src="<?php echo e(asset('/images/categories/electric.jpg')); ?>" style="width:auto; height:14rem" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text">Electric</h5>
                    <p class="card-text my-text">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>
                </div>
            </div>
      </div>
    </div>
      <!-- Featured products end -->

      <div class="row mt-5 mb-5"></div>
      <!-- Grid Slider -->
      <div class="row mx-auto my-auto">
        <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item py-5 active">
              <div class="row">
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid1.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid2.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid3.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid4.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item py-5">
              <div class="row">
              <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card my-grid-card" src="<?php echo e(asset('/images/gridslider/grid5.jpg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid6.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid7.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card my-grid-card">
                    <img class="card-img-top my-grid-card" src="<?php echo e(asset('/images/gridslider/grid8.jpeg')); ?>" alt="Card image cap">
                      
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Grid Slider End -->

      <!-- Our Vehicles -->
      <div class="row mt-5 mb-5">
        <div class="col-4"></div>
        <div class="col-4 text-center">
          <h3 class="my-text  mb-5">Our Vehicles</h3>
      </div>
        <div class="col-4"></div>
        
      
</div>
        <div class="row">
         <div class="col-4">
         <div class="card" style="width: 21rem;">
                  <img src="<?php echo e(asset('/images/categories/audi.jpg')); ?>"  style="width:auto; height:15rem" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text text-center">Audi</h5>
                    <p class="card-text my-text text-center  mb-4">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button ml-4">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>
         </div>
         

              <div class="col-4">
              <div class="card" style="width: 21rem;">
                  <img src="<?php echo e(asset('/images/categories/toyota.jpg')); ?>"  style="width:auto; height:15rem" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text text-center">Toyota</h5>
                    <p class="card-text my-text text-center  mb-4">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button ml-4">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>

              </div>
              <div class="col-4">
              <div class="card" style="width: 21rem;">
                  <img src="<?php echo e(asset('/images/categories/ford.jpg')); ?>"  style="width:auto; height:15rem" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title my-text text-center">Ford</h5>
                    <p class="card-text my-text text-center mb-4">Price: Rs. 1500</p>
                    <a href="#" class="btn my-button ml-4">View Details</a>
                    <a href="#" class="btn my-button ml-3">Book Now</a>
                  </div>
              </div>
              </div>
        </div>
      
      <!-- Our Vehicles End -->
      <div class="row mt-5 mb-5">
      
      </div>
   
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject\ShareWheel\resources\views/home.blade.php ENDPATH**/ ?>