

<?php $__env->startSection('adminContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Users</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>User</strong></div>
                        <div class="col-lg-3"><strong>Email</strong></div>
                        <div class="col-lg-2"><strong>Role</strong></div>
                        <div class="col-lg-1"><strong>Status</strong></div>
                        <div class="col-lg-2"><strong class="action-user">Action</strong></div>
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
                            <?php if($user->role=='manager'): ?>
                            <span class="role member"><?php echo e($user->role); ?></span>
                            <?php else: ?>
                            <span class="role user"><?php echo e($user->role); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1 my-user-data">
                            <?php if($user->is_activated == 1): ?>
                            <span class="status--process">Activated</span>
                            <?php else: ?>
                            <span class="status--denied">Blocked</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2">
                            <div class="table-data-feature">
                                <div class="class-button" style="margin-right:5px;margin-left:0px">
                                    <a href="/admin-users/user-detail/<?php echo e($user->username); ?>"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="View Detail">
                                        <i style="color:white;" class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
                                <form method="POST" action="/admin-users/<?php echo e($user->username); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php if($user->is_activated == 0): ?>
                                    <div class="class-button" style="margin-right:5px;margin-left:0px">
                                        <button type="submit" style="background-color:#808080;" class="item"
                                            data-toggle="tooltip" data-placement="top" title="Unblock">
                                            <i style="color:white;" class="zmdi zmdi-check"></i>
                                        </button>
                                    </div>
                                    <?php else: ?>
                                    <div class="class-button" style="margin-right:5px">
                                        <button type="submit" style="background-color:#808080;" class="item"
                                            data-toggle="tooltip" data-placement="top" title="Block">
                                            <i style="color:white;" class="zmdi zmdi-block"></i>
                                        </button>
                                    </div>
                                    <?php endif; ?>
                                </form>
                                <form method="POST" id="delete-form" action="/admin-users/<?php echo e($user->username); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirmDelete();" style="background-color:#808080;"
                                        class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i style="color:white;" class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="my-hr"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/admin-users.blade.php ENDPATH**/ ?>