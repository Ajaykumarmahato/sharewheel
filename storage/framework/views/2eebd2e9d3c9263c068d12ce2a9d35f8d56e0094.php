

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Users</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>User</strong></div>
                        <div class="col-lg-3"><strong>Email</strong></div>
                        <div class="col-lg-2"><strong>Role</strong></div>
                        <div class="col-lg-2"><strong>Status</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                        <div class="col-lg-1"></div>
                    </div>
                    <?php $__currentLoopData = $users ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block <?php echo e($user->is_activated == 0 ? 'my-blocked' : ''); ?>">
                        <div class="col-lg-3 my-user-data">
                            <img style="height:auto;width:120px;"
                                src="/storage/user_profile_images/<?php echo e($user->profile_image); ?>" alt="">
                            <br> <br><span class="name"><b><?php echo e($user->first_name); ?>&nbsp;<?php echo e($user->last_name); ?></b></span>
                        </div>
                        <div class="col-lg-3 my-user-data">
                            <span class="email"><?php echo e($user->email); ?></span>
                        </div>
                        <div class="col-lg-2 my-user-data">
                            <?php if($user->role=='administrator'): ?>
                            <span class="role member"><?php echo e($user->role); ?></span>
                            <?php else: ?>
                            <span class="role user"><?php echo e($user->role); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2 my-user-data">
                            <?php if($user->is_activated == 1): ?>
                            <span class="status--process">Activated</span>
                            <?php else: ?>
                            <span class="status--denied">Blocked</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1">
                            <div class="table-data-feature">
                                <div class="class-button" style="margin-right:5px;margin-left:0px">
                                    <a href="/manager-users/user-detail/<?php echo e($user->username); ?>"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="View Detail">
                                        <i style="color:white;" class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="my-hr"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-users.blade.php ENDPATH**/ ?>