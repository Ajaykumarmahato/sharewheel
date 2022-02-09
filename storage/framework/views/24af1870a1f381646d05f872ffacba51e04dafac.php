

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;"><?php echo e($user_category); ?></p>
</div>
<!-- Heading of every pages  -->

<!-- Our Vehicles End -->
<div class="container">
    <div class="row my-pagination">
        <?php echo e($vehicles->links('pagination')); ?>

    </div>
    <?php if($total_results > 0): ?>
    <div class="row my-vehicle-list">
        <?php $__currentLoopData = $vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4 mb-5">
            <div class="card" style="width: 20rem;">
                <div class="image-container">
                    <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>"
                        style="width:19.9rem; height:14rem" class="card-img-top" alt="...">
                    <a href="/view-details/<?php echo e($vehicle->slug); ?>">
                        <div class="overlay">
                            <div class="overlay-button">
                                <p class="text-decoration-none text-light">View
                                    Details</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a class="my-link" href="/view-details/<?php echo e($vehicle->slug); ?>">
                        <h5 class="card-title my-text text-center"><?php echo e($vehicle->vehicle_title); ?></h5>
                    </a>
                    <p class="card-text my-text text-center  mb-4">Rs&nbsp;<?php echo e($vehicle->vehicle_price); ?>/hr</p>
                    <?php if($vehicle->vehicle_quantity < 1): ?> <strike class="text-danger">
                        <p class="card-text text-danger text-center  mb-4">Out Of Stock!</p></strike>
                        <?php elseif($vehicle->vehicle_quantity <= 2): ?> <p class="card-text text-warning text-center  mb-4">
                            Only <?php echo e($vehicle->vehicle_quantity); ?> left. Hurry Up!</p>
                            <?php else: ?>
                            <p class="card-text text-success text-center  mb-4">In Stock:
                                <?php echo e($vehicle->vehicle_quantity); ?></p>
                            <?php endif; ?>
                            <a href="#" role="button" class="btn my-button ml-4">Add to Cart</a>
                            <a href="#" role="button"
                                class="btn my-button ml-3 <?php echo e($vehicle->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Book
                                Now</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php else: ?>
    <div class="row my-vehicle-list pb-5" style="background-color:#F8F9FA">
        <div class="col-12 mb-5 mt-5 text-center">
            <img src="<?php echo e(asset('/images/loading/searching.gif')); ?>" style="width:100px;height:auto" alt="searching"
                srcset="">
            <h1 class="my-text">Sorry!</h1> <br>
            <h3 class="text-danger"> No current vehicle to show for "<?php echo e($user_category); ?>"</h3>
        </div>
    </div>
    <div class="row mt-5 mb-5"></div>
    <?php endif; ?>
</div>
<!-- Our Vehicles End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/categorized-vehicles.blade.php ENDPATH**/ ?>