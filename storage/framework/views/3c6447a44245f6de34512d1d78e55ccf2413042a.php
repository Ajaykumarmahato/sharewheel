

<?php $__env->startSection('adminContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">My Profile <b>[</b> <?php echo e($user_info->username); ?> <b>]</b>
                        </span>
                    </div>
                    <div class="row card-body card-block">
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/user_profile_images/<?php echo e($user_info->profile_image); ?>" target="_blank">
                                <img class="my-admin-user-detail-img img-fluid"
                                    src="/storage/user_profile_images/<?php echo e($user_info->profile_image); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <h4>
                                <b>
                                    <?php echo e($user_info->first_name); ?>

                                    <?php echo e($user_info->last_name); ?>

                                </b>
                            </h4>
                            <hr>
                            <p><b>Date of Birth: </b><?php echo e(\Carbon\Carbon::parse($user_info->dob)->format('M-d-Y')); ?></p>
                            <p><b>Address: </b><?php echo e($user_info->country_name); ?>, <?php echo e($user_info->address); ?></p>
                            <p><b>Email Id: </b><?php echo e($user_info->email); ?></p>
                            <p><b>Contact Number: </b><?php echo e($user_info->contact_number); ?></p>
                            <p><b>Joined as Manager from:
                                </b><?php echo e(\Carbon\Carbon::parse($user_info->created_at)->format('M-d-Y')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/admin-account.blade.php ENDPATH**/ ?>