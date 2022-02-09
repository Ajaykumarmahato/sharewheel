

<?php $__env->startSection('adminContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Products</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Image</strong></div>
                        <div class="col-lg-2"><strong>Title</strong></div>
                        <div class="col-lg-3"><strong>Description</strong></div>
                        <div class="col-lg-2"><strong>Price/Hour</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                    </div>
                    <?php $__currentLoopData = $vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block">
                        <div class="col-lg-3">
                            <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>" alt="...">
                        </div>
                        <div class="col-lg-2">
                            <p class="title">
                                <h4><?php echo e($vehicle->vehicle_title); ?></h4><br>
                                <?php echo e($vehicle->vehicle_brand); ?>

                            </p>
                        </div>
                        <div class="col-lg-3">
                            <p class="text-justify"> <?php echo e($vehicle->vehicle_description); ?></p> <br>
                            <p><b>Quantity Available: </b><?php echo e($vehicle->vehicle_quantity); ?> <br>
                                <b>Category: </b><?php echo e($vehicle->vehicle_category); ?> <br>
                                <b>No. of Seats: </b><?php echo e($vehicle->vehicle_seat_number); ?>

                            </p>
                        </div>
                        <div class="col-lg-2">
                            <p class="price">Rs. <?php echo e($vehicle->vehicle_price); ?></p>
                        </div>
                        <div class="col-lg-1">
                            <div class="table-data-feature">
                                <div class="class-button" style="margin-right:5px;margin-left:0px">
                                    <a href="/admin-products/product-detail/<?php echo e($vehicle->slug); ?>"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="View Detail">
                                        <i style="color:white;" class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
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
<?php echo $__env->make('admin/adminLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/admin/admin-products.blade.php ENDPATH**/ ?>