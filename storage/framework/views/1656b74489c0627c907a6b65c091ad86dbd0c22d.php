

<?php $__env->startSection('managerContent'); ?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
<?php if(array_key_exists('users', $results)): ?>
<h1>Users</h1>
    <?php $__currentLoopData = $results['users']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($user->first_name); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(array_key_exists('vehicles', $results)): ?>
<h1>Vehicles</h1>
    <?php $__currentLoopData = $results['vehicles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($vehicle->vehicle_title); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(array_key_exists('brands', $results)): ?>
<h1>Brands</h1>
    <?php $__currentLoopData = $results['brands']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($brand->brand); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(array_key_exists('categories', $results)): ?>
<h1>Categories</h1>
    <?php $__currentLoopData = $results['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($category->category); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/managerSearch.blade.php ENDPATH**/ ?>