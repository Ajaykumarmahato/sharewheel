

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">MY WISHLIST</p>
</div>
<!-- Heading of every pages  -->

<div class="container">

    <?php if($total_wishlists > 0): ?>
    <div class="row">

        <table class="table borderless my-text">
            <tbody>
                <tr>
                    <th scope="row"><label>Vehicle Name </label></th>
                    <th scope="row"><label>Image</label></th>
                    <th scope="row"><label>Price/hr </label></th>
                    <th scope="row"><label>Brand</label></th>
                    <th scope="row"><label>Model</label></th>
                    <th scope="row"><label>Action</label></th>
                </tr>
                <?php if($vehicles!=0): ?>
                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><a class="my-text-hover text-decoration-none"
                            href="/view-details/<?php echo e($vehicle->slug); ?>"><?php echo e($vehicle->vehicle_title); ?></a></td>
                    <td scope="row"><img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>"
                            style="height:auto; width:150px" alt="image" /></td>
                    <td scope="row"><?php echo e($vehicle->vehicle_price); ?></td>
                    <td scope="row"><?php echo e($vehicle->vehicle_brand); ?></td>
                    <td scope="row"><?php echo e($vehicle->vehicle_model); ?></td>


                    <td scope="row">
                        <a href="/checkout/<?php echo e($vehicle->slug); ?>" role="button" class="btn view-detail-button-v2"
                            style="display:inline-block">Reserve</a>&nbsp;&nbsp;
                        <form method="POST" style="display:inline-block" action="/wish-list/<?php echo e($vehicle->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn my-danger-btn">X</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>

    <div class="row my-vehicle-list pb-5 mt-5 my-bg">
        <div class="col-12 mb-5 mt-5 text-center">
            <img src="<?php echo e(asset('/images/loading/searching.gif')); ?>" style="width:100px;height:auto" alt="searching"
                srcset="">
            <h1 class="my-text">Sorry!</h1>
            <p class="text-danger">Nothing to show in wishlist!</p>
        </div>
    </div>
    <div class="row mt-5 mb-5"></div>
    <?php endif; ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/wishList.blade.php ENDPATH**/ ?>