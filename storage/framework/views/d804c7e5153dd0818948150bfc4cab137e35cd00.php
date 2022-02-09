
<?php $__env->startSection('auth-content'); ?>

<div class="container mb-5">
    <div class="row mt-5">
        <div class="col-12 mt-3" style="display:block;">
            <a class="my-link my-logo-fade" href="<?php echo e(asset('/')); ?>"><img class="my-login-logo"
                    src="<?php echo e(asset('/images/logo/sharewheel-logo.png')); ?>" alt="logo" /></a>
            <form method="POST" action="<?php echo e(route('login')); ?>" class="my-login-form myRegisterForm mt-4 mb-4">
                <h3 class="text-center mt-3" style="color: #107a73;">
                    <i class="fa fa-user"></i> SIGN IN</h3>
                <hr>
                <?php echo csrf_field(); ?>
                <?php if($message=Session::get('Success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
                <?php endif; ?>

                <?php if($message=Session::get('Warning')): ?>
                <div class="alert alert-warning">
                    <p><?php echo e($message); ?></p>
                </div>
                <?php endif; ?>
                <div class="row mt-2"></div>
                <div class="form-group mb-4 mt-3">
                    <input type="email" class="my-input form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                        value="<?php echo e(old('email')); ?>" id="email" placeholder="example@gmail.com" required
                        autocomplete="email" autofocus />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div class="form-group mb-5">
                    <input type="password" class="my-input form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        id="password" name="password" placeholder="Password" required autocomplete="current-password" />
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mt-2 mb-2">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <button type="submit" class="myRegisterButton btn btn btn-block my-button text-light"><i
                                    class="fa fa-sign-in" style="color:white;"></i>&nbsp;Login</button>
                            <button type="submit"
                                class="spinner-myRegisterButton btn btn btn-block my-button text-light"><img
                                    src="<?php echo e(asset('/images/loading/spinner.gif')); ?>" alt="spinner" class="spinner">
                                Logging...</button>
                            
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 mt-3">
                            <a class="text-decoration-none  my-link" href="<?php echo e(asset('/register')); ?>">New? Register
                                here!</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-center py-3 my-text" style="font-size:small;">
                    © 2020 Copyright:
                    All rights reserved by Ajay and Priansu
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth/auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/auth/login.blade.php ENDPATH**/ ?>