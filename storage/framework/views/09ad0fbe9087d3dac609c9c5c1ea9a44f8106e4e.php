

<?php $__env->startSection('content'); ?>

<div class="container mt-5 mb-5">
      <div class="row mt-5">
        <div class="col-4"></div>
        <div class="col-4">
          <a class="my-link" href="<?php echo e(asset('/')); ?>"><img src="<?php echo e(asset('/images/logo/logo.png')); ?>" alt="logo" style="height:80px;width:200px;margin-left:75px;" /></a>
        </div>
        <div class="col-4"></div>
      </div>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4 my-bg mt-4 pt-3">
          <h3 class="text-center mt-3 mb-5" style="color: #107a73;">
            <i class="fa fa-user"></i>&nbsp;Login
          </h3>

          <form method="" action="" class="mt-4 mb-4">
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="example@gmail.com"
              />
            </div>
            <div class="form-group mb-5">
              <input
                type="password"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Password"
              />
            </div>
            <div class="float-left mt-2 mb-5">
              <button class="btn btn my-button text-light">Login</button>
              <button class="btn btn bg-danger text-light mr-3">Cancel</button>
              <a class="text-decoration-none ml-4 my-link" href="<?php echo e(asset('/sign-up')); ?>"
                >New? Register here!</a
              >
            </div>
          </form>
        </div>
        <div class="col-4"></div>

      </div>
      <div class="row mt-5 mb-5"></div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject\ShareWheel\resources\views/login.blade.php ENDPATH**/ ?>