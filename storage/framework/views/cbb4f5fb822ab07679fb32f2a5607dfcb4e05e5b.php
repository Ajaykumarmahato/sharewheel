

<?php $__env->startSection('managerContent'); ?>
<!-- <p><?php echo e($user->first_name); ?></p>
            <p><?php echo e($user->last_name); ?></p>
            <p><?php echo e($user->email); ?></p> -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card pb-5">
                <div class="col-lg-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">User Detail</span>
                        <a href="/manager-users" class="create-button"><button class="btn my-button">BACK</button></a>
                    </div>
                    <div class="row mb-4 mt-4 card-body card-block">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/user_profile_images/<?php echo e($user->profile_image); ?>" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_profile_images/<?php echo e($user->profile_image); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5 pl-4">
                            <p><strong>General Information</strong></p>
                            <p><strong>Name:</strong> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> <br>
                                <strong>Date of Birth:</strong> <?php echo e($user->dob); ?> <br>
                                <strong>Joined us on:</strong> <?php echo e($user->created_at->toDateString()); ?> at
                                <?php echo e($user->created_at->toTimeString()); ?> <br>
                                <strong>Status: </strong>
                                <?php if($user->is_activated == 1): ?>
                                <span class="status--process">Activated</span>
                                <?php else: ?>
                                <span class="status--denied">Blocked</span>
                                <?php endif; ?>
                            </p>
                            <hr>
                            <p><strong>Contact Information</strong></p>
                            <p><strong>Email:</strong> <?php echo e($user->email); ?><br>
                                <strong>Contact Number:</strong> <?php echo e($user->contact_number); ?> <br>
                                <strong>Address:</strong> <?php echo e($user->address); ?> <br>
                            </p>
                        </div>
                        <div class="col-lg-2 pl-5">
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 ml-3 single-img-gallery">
                            <a href="/storage/user_liscence_images/<?php echo e($user->liscence_image); ?>" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_liscence_images/<?php echo e($user->liscence_image); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pl-4">
                            <p><strong>Additional Information</strong></p>
                            <p><strong>Liscence Holder:</strong> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> <br>
                                <strong>Age: </strong><?php echo e(\Carbon\Carbon::parse($user->dob)->age); ?> years <br>
                                <strong>Liscence Number: </strong><?php echo e($user->liscence_number); ?></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-user-detail.blade.php ENDPATH**/ ?>