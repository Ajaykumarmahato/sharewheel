

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/heading.jpeg')); ?>'); height:90px;">
    
  <h3 class="text-light pt-4 text-center"><b>Vehicle Details</b></h3>
    </div>
    <!-- Heading of every pages  -->
<div class="container mb-5">
      <div class="row my-bg mt-5">
        <div class="col-4 ml-5"></div>
      
        <div class="col-4"></div>
      </div>
      <div class="row float-right mt-2 mr-3">
        <a href="#" class="my-link  mr-4"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
        <a href="#"  class="my-link  mr-4"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
        <a href="#" class="my-link  mr-4"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
        <a href="#" class="my-link  mr-4"><i class="fa fa-pinterest"></i></a>
      </div>
      <div class="row mt-5">
        <!-- <div class="col-1"></div> -->
        <!-- <div class="col-6 mr-4">
          <div><img class="my-detail-image" src="<?php echo e(asset('/images/categories/vehicle.jpg')); ?>" alt="vehicle" /></div>
        </div> -->
        <div class="col-6">
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
        <div class="col-5">
          <div class="row">
            <div class="col-12">
              <h3 style="color: #01a99d;"><?php echo e($vehicle->vehicle_title); ?></h3>
            </div>
          </div>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos sed
            quidem quae.
          </p>
          <div class="row">
            <table class="table borderless">
              <tbody>
                <tr>
                  <th scope="row"><label>Vehicle Name </label></th>
                  <td><?php echo e($vehicle->vehicle_title); ?></td>
                </tr>
                <tr>
                  <th scope="row"><label>Brand </label></th>
                  <td><?php echo e($vehicle->vehicle_brand); ?></td>
                </tr>
                <tr>
                  <th scope="row"><label>Model </label></th>
                  <td><?php echo e($vehicle->vehicle_model); ?></td>
                </tr>
                <tr>
                  <th scope="row"><label>Vehicle Number</label></th>
                  <td><?php echo e($vehicle->vehicle_plate_number); ?></td>
                </tr>
                <tr>
                  <th scope="row"><label>Number of Seats </label></th>
                  <td>5</td>
                </tr>
                <tr>
                  <th scope="row"><label>Availability</label></th>
                  <td>In Stock (5)</td>
                </tr>
                <tr>
                  <th scope="row"><label>Price </label></th>
                  <td>Rs. <?php echo e($vehicle->vehicle_price); ?>/hr</td>
                </tr>
                <tr>
                  <th scope="row"><label>Driver Cost</label></th>
                  <td>Rs. 200/hr</td>
                </tr>
               
              </tbody>
            </table>
            <button class="btn btn-block ml-4 mr-5 mt-5 my-button text-light ">
                  Book Now
                </button>
          </div>

        
        </div>
      </div>
      <div class="row mb-5"></div>
      <div class="row mb-5"></div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/view-details-develop.blade.php ENDPATH**/ ?>