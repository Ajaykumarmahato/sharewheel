


<?php $__env->startSection('content'); ?>

<!-- Heading of profile pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px; ">
  <p class="text-light pt-4 text-center" style="font-size:70px;">My Profile</p>
</div>
<!-- Heading of profile pages  -->

<div class="container pt-3">

  <div class="row pt-3 pb-3 mb-3">
    <div class="col-lg-4">
      <div class="view view-cascade single-img-gallery ">
        <a href="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>" target="_blank">
          <img class="card-img-top user-image img-fluid"
            src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>" alt="Card image cap">
        </a>

      </div>
    </div>
    <div class="col-lg-4">
      <h4><b><?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?></b></h4>
      <hr>
      <p><b>Date of Birth: </b><?php echo e(\Carbon\Carbon::parse(auth()->user()->dob)->format('M-d-Y')); ?></p>
      <p><b>Address: </b><?php echo e(auth()->user()->country_name); ?>, <?php echo e(auth()->user()->address); ?></p>
      <p><b>Email Id: </b><?php echo e(auth()->user()->email); ?></p>
      <p><b>Contact Number: </b><?php echo e(auth()->user()->contact_number); ?></p>
      <p><b>Joined as Manager from:
        </b><?php echo e(\Carbon\Carbon::parse(auth()->user()->created_at)->format('M-d-Y')); ?>

      </p>
    </div>
    <div class="col-lg-4">
      <?php if(count($order_info)>0): ?>
      <h4><b>Reservation Summary</b></h4>
      <hr>
      <?php $__currentLoopData = $order_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p><?php echo e($order->vehicle_title); ?>, <?php echo e($order->vehicle_brand); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <a href="/my-booking" role="button" class="btn view-detail-button-v2" style="display:inline-block"><i
          class="fa fa-eye"></i> View More</a>
      <?php endif; ?>
      <div class="my-ad-carousel single-img-gallery mt-4">
        <a href="<?php echo e(asset('/images/gridslider/sharewheel-ad.png')); ?>" target="_blank">
          <img src="<?php echo e(asset('/images/gridslider/sharewheel-ad.png')); ?>" class="my-ad-image img-fluid"
            style="width:370px;height:500px" alt="">
        </a>
      </div>
    </div>
  </div>
  <div class="row pt-3 pb-3 mb-5">
    <div class="col-lg-4">
      <div class="view view-cascade single-img-gallery ">
        <a href="/storage/user_liscence_images/<?php echo e(auth()->user()->liscence_image); ?>" target="_blank">
          <img class="card-img-top user-image img-fluid"
            src="/storage/user_liscence_images/<?php echo e(auth()->user()->liscence_image); ?>" alt="Card image cap">
        </a>
      </div>
    </div>
    <div class="col-lg-4">
      <p><b>Liscence Number: </b> <?php echo e(auth()->user()->liscence_number); ?></p>
    </div>
    <div class="col-lg-4">
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/user-profile.blade.php ENDPATH**/ ?>