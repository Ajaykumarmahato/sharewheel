

<?php $__env->startSection('managerContent'); ?>
<!-- <p><?php echo e($vehicle->first_name); ?></p>
            <p><?php echo e($vehicle->last_name); ?></p>
            <p><?php echo e($vehicle->email); ?></p> -->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card pb-5">
                <div class="col-lg-12">
                    <div class="row card-header">
                        <span class="feedback-header-text">Vehicle Detail</span>
                        <a href="/manager-products" class="create-button"><button
                                class="btn my-button">BACK</button></a>
                    </div>
                    <div class="row mb-4 mt-4 card-body card-block">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 single-img-gallery">
                            <a href="/storage/vehicle_images/<?php echo e($vehicle->vehicle_image1); ?>" target="_blank">
                                <img class="my-admin-vehicle-detail-img img-fluid"
                                    src="/storage/vehicle_images/<?php echo e($vehicle->vehicle_image1); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5 pl-4">
                            <p><strong>General Information</strong></p>
                            <p><strong>Tile:</strong> <?php echo e($vehicle->vehicle_title); ?>, <?php echo e($vehicle->vehicle_brand); ?> <br>
                                <strong>Description:</strong> <?php echo e($vehicle->vehicle_description); ?> <br>
                                <?php echo e($vehicle->vehicle_plate_number); ?> <br>
                                <strong>No. of Seats: </strong><?php echo e($vehicle->vehicle_seat_number); ?> <br>
                                <strong>Linked with us on:</strong>
                                <?php echo e(\Carbon\Carbon::parse($vehicle->created_at)->format('M-d-Y')); ?> at
                                <?php echo e($vehicle->created_at->toTimeString()); ?> <br>
                                <strong>Status: </strong>
                                <?php if($vehicle->vehicle_is_published == 1): ?>
                                <span class="status--process">Published</span>
                                <?php else: ?>
                                <span class="status--denied">Hidden</span>
                                <?php endif; ?>
                            </p>
                            <hr>
                            <p><strong>Additional Information</strong></p>
                            <p><strong>Category:</strong> <?php echo e($vehicle->vehicle_category); ?><br>
                                <p><strong>Available Stock:</strong> <?php echo e($vehicle->vehicle_quantity); ?><br>
                                    <strong>Price per Hour:</strong> <?php echo e($vehicle->vehicle_price); ?> <br>
                                </p>
                        </div>
                        <div class="col-lg-2 pl-5">
                        </div>
                    </div>
                    <hr>
                    <!-- <div class="row mt-4">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4 ml-3 single-img-gallery">
                            <a href="/storage/vehicle_liscence_images/<?php echo e($vehicle->liscence_image); ?>" target="_blank">
                                <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/vehicle_liscence_images/<?php echo e($vehicle->liscence_image); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pl-4">
                                <p><strong>Additional Information</strong></p>
                                <p><strong>Liscence Holder:</strong> <?php echo e($vehicle->first_name); ?> <?php echo e($vehicle->last_name); ?> <br>
                                <strong>Age:</strong></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-product-detail.blade.php ENDPATH**/ ?>