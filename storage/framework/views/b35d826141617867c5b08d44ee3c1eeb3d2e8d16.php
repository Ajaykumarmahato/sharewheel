

<?php $__env->startSection('adminContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Daily Posts and Feedbacks</span>
                    </div>
                    <?php $__currentLoopData = $feedbacks ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feedback): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block <?php echo e($feedback->is_published == 0 ? 'my-blocked' : ''); ?>">
                        <div class="col-lg-4">
                            <p><b><?php echo e($feedback->first_name); ?></b></p>

                            <p>
                                <i class="far fa-envelope"></i><i> <?php echo e($feedback->email); ?></i>
                            </p>

                            <p>
                                <i class="far fa-clock"></i>
                                <?php echo e(\Carbon\Carbon::parse($feedback->created_at)->format('M-d-Y')); ?> at
                                <?php echo e($feedback->created_at->toTimeString()); ?>

                            </p>

                        </div>
                        <div class="col-lg-5">
                            <p class="text-justify"><?php echo e($feedback->message); ?></p>
                        </div>
                        <div class="col-lg-1">
                            <?php if($feedback->is_published == 1): ?>
                            <span class="status--process">Published</span>
                            <?php else: ?>
                            <span class="status--denied">Hidden</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-1">
                            <div class="table-data-feature">
                                <form method="POST" action="/admin-feedbacks/<?php echo e($feedback->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php if($feedback->is_published == 0): ?>
                                    <div class="class-button">
                                        <button type="submit" style="background-color:#808080;" class="item"
                                            data-toggle="tooltip" data-placement="top" title="Publish">
                                            <i style="color:white;" class="zmdi zmdi-check"></i>
                                        </button>
                                    </div>
                                    <?php else: ?>
                                    <div class="class-button">
                                        <button type="submit" style="background-color:#808080;" class="item"
                                            data-toggle="tooltip" data-placement="top" title="Hide">
                                            <i style="color:white;" class="zmdi zmdi-block"></i>
                                        </button>
                                    </div>
                                    <?php endif; ?>
                                </form>
                                <form method="POST" id="delete-form" action="/admin-feedbacks/<?php echo e($feedback->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirmDelete();" style="background-color:#808080;"
                                        class="item mr-4" data-toggle="tooltip" data-placement="top" title="Delete">
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
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/admin-feedbacks.blade.php ENDPATH**/ ?>