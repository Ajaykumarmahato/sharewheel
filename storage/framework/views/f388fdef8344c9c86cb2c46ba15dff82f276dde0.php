

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<script src="jquery-3.5.1.min.js"></script>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Registered Vehicles</span>
                        <a href="/manager-products/create-product" class="create-button"><button class="btn my-button">+
                                Register Vehicle</button></a>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Image</strong></div>
                        <div class="col-lg-2"><strong>Title</strong></div>
                        <div class="col-lg-3"><strong>Description</strong></div>
                        <div class="col-lg-1"><strong>Status</strong></div>
                        <div class="col-lg-1"><strong>Price/hr</strong></div>
                        <div class="col-lg-2"><strong>Action</strong></div>

                    </div>

                    <?php $__currentLoopData = $vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block <?php echo e($vehicle->vehicle_is_published == 0 ? 'my-blocked' : ''); ?>">
                        <div class="col-lg-3">
                            <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>" alt="...">
                        </div>
                        <div class="col-lg-2">
                            <p class="title">
                                <h4><?php echo e($vehicle->vehicle_title); ?></h4><br>
                                Brand: <?php echo e($vehicle->vehicle_brand); ?>

                            </p>
                        </div>
                        <div class="col-lg-3">
                            <p class="text-justify">
                                <?php echo e(Illuminate\Support\Str::limit($vehicle->vehicle_description, 50)); ?>

                                <!-- <?php echo e($vehicle->vehicle_description); ?>  -->
                                <br>
                                <b>Attributes: </b>
                                <?php echo e(Illuminate\Support\Str::limit($vehicle->vehicle_attributes, 50)); ?>

                                <!-- <?php echo e($vehicle->vehicle_attributes); ?> -->
                            </p>
                            <p><b>Quantity Available: </b><?php echo e($vehicle->vehicle_quantity); ?> <br>
                                <b>Category: </b><?php echo e($vehicle->vehicle_category); ?> <br>
                                <b>No. of Seats: </b><?php echo e($vehicle->vehicle_seat_number); ?> <br>
                                <b>Fuel Type: </b><?php echo e($vehicle->vehicle_fuel_type); ?> <br>
                                <b>Engine Capacity (CC):</b> <?php echo e($vehicle->vehicle_engine); ?>

                            </p>
                        </div>
                        <div class="col-lg-1">
                            <?php if($vehicle->vehicle_is_published == 1): ?>
                            <span class="status--process">Published</span>
                            <?php else: ?>
                            <span class="status--denied">Hidden</span>
                            <?php endif; ?>
                            <hr>
                            <?php if($vehicle->vehicle_is_featured == 1): ?>
                            <span class="status--process">Featured</span>
                            <?php else: ?>
                            <span class="status--denied">Not Featured</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1">
                            <p>Rs. <?php echo e($vehicle->vehicle_price); ?></p>
                        </div>
                        <div class="col-lg-2">
                            <div class="table-data-feature mr-5">
                                <div class="class-button" style="margin-right:5px;margin-left:0px">
                                    <a href="/manager-products/product-detail/<?php echo e($vehicle->slug); ?>"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="View Detail">
                                        <i style="color:white;" class="zmdi zmdi-eye"></i>
                                    </a>
                                </div>
                                <div class="class-button" style="margin-right:5px">
                                    <a href="/manager-products/edit-product/<?php echo e($vehicle->slug); ?>"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="Edit">
                                        <i style="color:white;" class="zmdi zmdi-edit"></i>
                                    </a>
                                </div>
                                <form method="POST" action="/manager-products/<?php echo e($vehicle->slug); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php if($vehicle->vehicle_is_published == 0): ?>
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
                                <form method="POST" id="delete-form" action="/manager-products/<?php echo e($vehicle->slug); ?>">
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
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-products.blade.php ENDPATH**/ ?>