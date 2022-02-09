


<?php $__env->startSection('content'); ?>

<!-- Heading of profile pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px; ">
  <img src="/storage/user_profile_images/<?php echo e(Auth::user()->profile_image); ?>" alt="" class="my-profile-picture" />
  <!-- <h3 class="text-light pt-4 text-center"><b>My Profile</b></h3> -->
</div>
<!-- Heading of profile pages  -->

<div class="container pt-3">
  <div class="row pb-4"></div>
  <div class="row pt-3 my-name">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 my-name">
      <h2><b><?php echo e(auth()->user()->first_name); ?> <?php echo e(auth()->user()->last_name); ?></b></h2>
    </div>
    <div class="col-lg-4"></div>
  </div>
  <div class="row my-status">
    <div class="col-lg-3"></div>
    <div class="col-lg-3">
      <span><strong><?php echo e(auth()->user()->country_name); ?>,</strong>&nbsp;<?php echo e(auth()->user()->address); ?> </span>
    </div>
    <div class="col-lg-3"></div>
  </div>
  <div class="row my-icons">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <a href="https://www.facebook.com/" class="text-dark"><i class="fa fa-facebook-square fa-2x"></i></a>&nbsp;&nbsp;
      <a href="https://www.instagram.com/" class="text-dark"><i class="fa fa-instagram fa-2x pl-5"></i></a>&nbsp;&nbsp;
      <a href="https://www.twitter.com/" class="text-dark"><i
          class="fa fa-twitter-square fa-2x pl-5"></i></a>&nbsp;&nbsp;
    </div>
    <div class="col-lg-4"></div>
  </div>
  <div class="row my-description pt-3">
    <p class="text-center">
      <?php echo e(auth()->user()->email); ?>

    </p>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/user-profile.blade.php ENDPATH**/ ?>