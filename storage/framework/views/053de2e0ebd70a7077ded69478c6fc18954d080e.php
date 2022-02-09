

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">CHECKOUT</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    <div class="row mt-5 my-bg">
        <div class="col-4"></div>
        <div class="col-4">
            <p class="text-center mt-3 mb-3">
                Have a coupon? <a href="">Click here</a> to enter your code
            </p>
        </div>
        <div class="col-4"></div>
    </div>
    <form action="/checkout/confirm/<?php echo e($vehicle->slug); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row mt-4 pb-1">
            <div class="col-6 my-bg">
                <h4 class="mt-3 pb-3">Billing Detail</h4>
                <input value="<?php echo e($vehicle->id); ?>" name="vehicle_id" type="hidden">
                <input value="<?php echo e($vehicle->slug); ?>" name="vehicle_slug" type="hidden">
                <div class="row pb-1">
                    <div class="col-12">
                        <!-- Full name -->
                        <label>Name</label>
                        <div class="input-group mb-4">

                            <input readonly type="text" class="form-control"
                                value="<?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?>"
                                placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1"
                                name="name" />
                        </div>
                    </div>
                </div>
                <!-- country -->
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Country</label>
                        <div class="input-group mb-4">
                            <input type="text" class="form-control" readonly value="Nepal" placeholder="Country"
                                aria-label="Username" aria-describedby="basic-addon1" name="country" />
                        </div>
                    </div>
                </div>
                <!-- address -->
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Address</label>
                        <div class="input-group mb-4">
                            <input type="text" value="<?php echo e(old('address')); ?>"
                                class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address"
                                placeholder="State-City-Street Address" aria-label="Username"
                                aria-describedby="basic-addon1" />
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message ?? ''); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-4">
                        <h5>Need a driver?</h5>
                    </div>
                    <div class="col-4 pl-5"></div>
                    <div class="col-4">
                        <div class="<?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Yes <input type="radio" value="1" name="driver" class="mr-5" id="" /></label>
                            <label>No <input type="radio" value="0" name="driver" id="" /></label>
                        </div>
                        <?php $__errorArgs = ['driver'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message ?? ''); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="row mt-2 pb-1">
                    <div class="col-12">
                        <!-- phone number -->
                        <label>Phone</label>
                        <div class="input-group mb-4">
                            <input type="text" value="<?php echo e(Request::old('phone')); ?>" name="phone"
                                class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Phone"
                                aria-label="Username" aria-describedby="basic-addon1" />
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message ?? ''); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                </div>
                <div class="row pb-1">
                    <!-- email address -->
                    <div class="col-12">
                        <label>Email</label>
                        <div class="input-group mb-4">
                            <input type="text" name="email" readonly class="form-control"
                                value="<?php echo e(Auth::user()->email); ?>" placeholder="Email" aria-label="Username"
                                aria-describedby="basic-addon1" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h4 class="mt-3 pb-3">Your Order</h4>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Vehicle</label>
                        <div class="input-group mb-4">
                            <input type="text" name="title" value="<?php echo e($vehicle->vehicle_title); ?>" readonly
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Brand</label>
                        <div class="input-group mb-4">
                            <input type="text" name="brand" value="<?php echo e($vehicle->vehicle_brand); ?>" readonly
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Quantity</label>
                        <div class="input-group mb-4">
                            <input type="number" name="quantity" value="1"
                                class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('quantity')); ?>" />
                            <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message ?? ''); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-12">
                        <label>Price/hour [NRP]</label>
                        <div class="input-group mb-4">
                            <input type="text" name="price_per_hour" readonly value="<?php echo e($vehicle->vehicle_price); ?>"
                                class="form-control" /> </div>
                    </div>
                </div>
                <div class="row pb-1">
                    <div class="col-6">
                        <h5 class="float-left">Choose duration</h5>
                    </div>
                    <div class="col-6">
                        <div id="durations" class="<?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Hourly <input type="radio" value="0" class="mr-5" name="duration" id="d1" /></label>

                            <label>In Days <input type="radio" value="1" name="duration" id="d2" /></label>
                        </div>
                        <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message ?? ''); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div id="dr-1">
                            <input type="number" name="upto_time" class="toHide">
                            <br>
                            <small class="my-text">(Default 1 hour)</small>
                        </div>
                        <div id="dr-2">
                            <input type="date" name="upto_date" class="toHide">
                            <br>
                            <small class="my-text">(Default 1 day)</small>
                        </div>
                    </div>
                </div>
                <div class="row pb-1 mt-4">
                    <div class="col-6">
                        <h5>Select a Payment mode</h5>
                    </div>
                    <div class="col-6">
                        <div class="<?php $__errorArgs = ['payment_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <label>Esewa <input type="radio" value="ESEWA" name="payment_mode" class="mr-5"
                                    id="" /></label>
                            <label>Cash On Delivery <input type="radio" value="COD" name="payment_mode" id="" /></label>
                        </div>
                        <?php $__errorArgs = ['payment_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message ?? ''); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-5 mt-5">
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
            <div class="col-3">
                <button type="submit" class="mt-3 mr-3 btn my-button text-decoration-none btn-block" href="#"
                    role="button">
                    Next
                </button>
            </div>

        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/checkout.blade.php ENDPATH**/ ?>