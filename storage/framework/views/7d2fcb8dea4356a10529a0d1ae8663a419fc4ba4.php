

<?php $__env->startSection('content'); ?>

<div class="container mt-5 mb-5">
    <div class="row mt-5 mb-5"></div>
      <div class="row">
        <div class="col-4"></div>
        <div
          class="col-4 mb-4"
          style="background-color: #e9ecef; border-radius: 4px;"
        >
          <h3 class="text-center mt-2" style="color: #107a73;">Sign Up!</h3>
          <form method="" action="" class="mt-4 mb-4">
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="First Name"
              />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Last Name"
              />
            </div>
            <div>
              <span class="text-secondary"> Photo</span><br />
              <input class="mb-4" type="file" accept="image/png, image/jpeg" />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Country Name"
              />
            </div>

            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Address"
              />
            </div>
            <div class="form-group mb-4">
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="example@gmail.com"
              />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Contact Number"
              />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Citizenship Number"
              />
            </div>
            <div>
              <span class="text-secondary"> Vehicle Liscence Photo</span>
              <input class="mb-4" type="file" accept="image/png, image/jpeg" />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="Liscence Number"
              />
            </div>
            <div class="mt-4 float-left mb-4">
              <button class="btn btn my-button text-light">
                Sign Up
              </button>
              <button class="btn btn-danger">Cancel</button>
            </div>
          </form>
        </div>
        <div class="col-4"></div>
      </div>
      <div class="row mt-5 mb-5"></div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MajorProject\ShareWheel\resources\views/sign-up.blade.php ENDPATH**/ ?>