<?php $__env->startSection('auth-content'); ?>

<div class="container mt-5 mb-5">
    <div class="row mb-5">
        <div class="col-4"></div>
        <div class="col-4">
            <a class="my-link my-logo-fade" href="<?php echo e(asset('/')); ?>"><img class="my-login-logo"
                    src="<?php echo e(asset('/images/logo/sharewheel-logo.png')); ?>" alt="logo" /></a>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="my-login-form my-responsive-signup col-8 pl-4 mb-4 my-bg" style="border-radius: 5px;">
            <h3 class="text-center mt-2 pt-4 pb-2 my-text">Registration Form</h3>
            <p style="font-size:13px" class="text-secondary">Create your account. It's free and takes few minutes</p>
            <hr>
            <div class="row pb-3"></div>
            <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data"
                class="myRegisterForm mt-4 mb-4" name="member_registration">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-4">
                    <small class="float-left pb-2">First Name</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>" autocomplete="first_name"
                        autofocus />
                    <?php $__errorArgs = ['first_name'];
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
                <div class="form-group mb-4">
                    <small class="float-left pb-2">Last Name</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>" autocomplete="last_name" />
                    <?php $__errorArgs = ['last_name'];
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

                <div class="row my-photo-col">
                    <div class="col-5 my-photo-col1 text-secondary">Profile Photo</div>
                    <div class="col-7 my-photo-col2"><input class="my-column-input mb-4" style=" box-shadow: none;"
                            type="file" name="profile_image" /></div>
                </div>

                <div class="row my-photo-col">
                    <div class="col-5 my-photo-col1 text-secondary">Date of Birth</div>
                    <div class="col-7 my-photo-col2">
                        <input type="date" class="my-column-input form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-3"
                            id="dob" placeholder="Country Name" name="dob" value="<?php echo e(old('dob')); ?>"
                            autocomplete="dob" />
                        <?php $__errorArgs = ['dob'];
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Country Name</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['country_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="country_name" name="country_name" value="<?php echo e(old('country_name')); ?>"
                        autocomplete="country_name" />
                    <?php $__errorArgs = ['country_name'];
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Address</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="address"
                        placeholder="For eg: City, Street Name-Ward Number" name="address" value="<?php echo e(old('address')); ?>"
                        autocomplete="address" />
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Email</small>
                    <input type="email" class="my-input form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email"
                        name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" />
                    <?php $__errorArgs = ['email'];
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Contact Number</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['contact_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="contact_number" name="contact_number" value="<?php echo e(old('contact_number')); ?>"
                        autocomplete="contact_number" />
                    <?php $__errorArgs = ['contact_number'];
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Liscence Number</small>
                    <input type="text" class="my-input form-control <?php $__errorArgs = ['liscence_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="liscence_number" placeholder="For eg: 123-321-456" name="liscence_number"
                        value="<?php echo e(old('liscence_number')); ?>" autocomplete="liscence_number" />
                    <?php $__errorArgs = ['liscence_number'];
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

                <div class="row my-photo-col">
                    <div class="col-5 my-photo-col1 text-secondary">Liscence Photo</div>
                    <div class="col-7 my-photo-col2"><input class="my-column-input mb-4" style=" box-shadow: none;"
                            type="file" name="liscence_image" /></div>
                </div>

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Password</small>
                    <input type="password" class="my-input form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="password" name="password" value="<?php echo e(old('password')); ?>"
                        autocomplete="new-password" />
                    <?php $__errorArgs = ['password'];
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

                <div class="form-group mb-4">
                    <small class="float-left pb-2">Re-enter Password</small>
                    <input type="password" class="my-input form-control " id="password-confirm"
                        name="password_confirmation" autocomplete="new-password" />
                </div>

                <div class="row pt-3"></div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" name="submit"
                            class="myRegisterButton btn btn-block my-button text-light"></i><i class="fa fa-sign-in"
                                style="color:white;" aria-hidden="true">&nbsp;
                                    
                            </i>&nbsp;Signup
                        </button>
                        <button type="submit" name="submit"
                            class="spinner-myRegisterButton btn btn-block my-button text-light"><img
                                src="<?php echo e(asset('/images/loading/spinner.gif')); ?>" alt="spinner"
                                class="spinner">&nbsp;Signing...
                        </button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 pb-4">
                        <button type="reset" class="btn btn-block btn-danger"><i class="fa fa-ban"
                                style="color:white;"></i>&nbsp;Reset</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 pb-4">
                        <a class="my-link" href="/login">
                            <p class="my-text">Already Have an Account?&nbsp;Login
                                Here!
                        </a></p>
                    </div>
                </div>
                <hr>
                <div class="text-center my-text" style="font-size:small;">
                    © 2020 Copyright:
                    All rights reserved by Ajay and Priansu
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row mt-5 mb-5"></div>
</div>
<!-- Scroll Top Button -->
<button onclick="scrollToTop()" id="scroll-btn" title="Go to top">
    <i style="color:white" class="fa fa-chevron-up" aria-hidden="true"></i>
</button>
<!-- Scroll Top Button End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth/auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/auth/register.blade.php ENDPATH**/ ?>