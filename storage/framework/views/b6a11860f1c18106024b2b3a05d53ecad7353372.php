

<?php $__env->startSection('content'); ?>


<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"
            style="background-image: url('./storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>');">
            <div class="div">

            </div>
            
        </div>
        <div class="carousel-item"
            style="background-image: url('/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image2); ?>');">
            
        </div>
        <div class="carousel-item"
            style="background-image: url('/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image3); ?>');">
            
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    <div class="navigators">
        <div class="my-carousel-navigators">
            <div data-target="#carousel-thumb" data-slide-to="0" class="active">
                <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>" height="100" width="auto">
            </div>
            <div data-target="#carousel-thumb" data-slide-to="1">
                <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image2); ?>" height="100" width="auto">
            </div>
            <div data-target="#carousel-thumb" data-slide-to="2">
                <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image3); ?>" height="100" width="auto">
            </div>
        </div>
    </div>
</div>
<!--/.Carousel Wrapper-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/view-details.blade.php ENDPATH**/ ?>