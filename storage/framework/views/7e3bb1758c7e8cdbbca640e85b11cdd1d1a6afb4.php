
    <?php $__currentLoopData = $vehicles ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <?php if($vehicle->vehicle_is_published == 1): ?>
        <div class="col-4 mb-5">
        <div class="card" style="width: 21rem;">
            <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>"  style="width:auto; height:15rem" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title my-text text-center"><?php echo e($vehicle->vehicle_title); ?></h5>
                <p class="card-text my-text text-center  mb-4"><?php echo e($vehicle->vehicle_price); ?>/hr</p>
                <a href="/view-details/<?php echo e($vehicle->id); ?>" class="btn my-button ml-4">View Details</a>
                <a href="#" class="btn my-button ml-3">Book Now</a>
            </div>
        </div>
        </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $vehicles->links(); ?>

<?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/home-child.blade.php ENDPATH**/ ?>