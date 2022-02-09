

<?php $__env->startSection('managerContent'); ?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 card ">
                    <h1>Users</h1>
                    <hr>
                    <?php if(array_key_exists('users', $results)): ?>
                    
                        <?php $__currentLoopData = $results['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="my-text-hover" href="/manager-users/user-detail/<?php echo e($user->username); ?>"><p><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> </p></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <p  class="text-danger">No Results for Users </p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 card ">

                    <h1>Vehicles</h1>
                    <hr>
                    <?php if(array_key_exists('vehicles', $results)): ?>
                    
                        <?php $__currentLoopData = $results['vehicles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="my-text-hover" href="/manager-products/product-detail/<?php echo e($vehicle->slug); ?>"><p><?php echo e($vehicle->vehicle_title); ?></p></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <p class="text-danger">No Results for Vehicles </p>
                    <?php endif; ?>
                   </div>
                <div class="col-lg-3 card ">
                    <h1>Brands</h1>
                    <hr>
                    <?php if(array_key_exists('brands', $results)): ?>
                    
                        <?php $__currentLoopData = $results['brands']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="my-text-hover" href="<?php echo e($brand->brand_link); ?>"><p><?php echo e($brand->brand); ?></p></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php else: ?>
                    <p class="text-danger">No Results for Brands </p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 card ">
                    <h1>Categories</h1>
                    <hr>
                    <?php if(array_key_exists('categories', $results)): ?>
                    
                        <?php $__currentLoopData = $results['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="my-text-hover" href="/manager-categories"><p><?php echo e($category->category); ?></p></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php else: ?>
                    <p class="text-danger">No Results for Categories</p>
                    <?php endif; ?>
                </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/managerSearch.blade.php ENDPATH**/ ?>