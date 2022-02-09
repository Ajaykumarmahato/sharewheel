

<?php $__env->startSection('adminContent'); ?>

<!-- PAGE CONTAINER-->


<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">overview</h2>
                        <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>add item</button> -->
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($users); ?></h2>
                                    <span>Total Customers</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fas fa-car"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($vehicles); ?></h2>
                                    <span>Total Vehicles</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-fax"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($orders); ?></h2>
                                    <span>Reservations</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <div class="text">
                                    <h2><?php echo e($brands); ?></h2>
                                    <span>Associated Brands</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/admin.blade.php ENDPATH**/ ?>