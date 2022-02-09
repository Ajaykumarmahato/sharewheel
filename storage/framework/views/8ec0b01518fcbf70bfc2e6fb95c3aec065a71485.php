

    <?php $__env->startComponent('mail::panel'); ?>
    New Booking, <br>
    <b><?php echo e($order_info->first_name); ?>  <?php echo e($order_info->last_name); ?></b> has placed booking for 
    <b><?php echo e($order_info->vehicle_title); ?></b>.
<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::table'); ?>
| Booking Summary       | 
| ----------------------|

            Vehicle Name  =>    <?php echo e($order_info->vehicle_title); ?>

            Unit Amount  =>    Rs. <?php echo e($order_info->price_per_hour); ?>

            Tax Amount   =>    Rs. <?php echo e($tax_amount); ?>

            Total Amount =>    Rs. <?php echo e($order_info->total_price); ?>


<?php if (isset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906)): ?>
<?php $component = $__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906; ?>
<?php unset($__componentOriginal20cb600a4a4149597e6997e789a6c2fa917d1906); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    Thank you, <?php echo e(config('app.name')); ?> 

<?php $__env->startComponent('mail::button', ['url' => 'http://localhost:8000', 'color'=>'green']); ?>
Home
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/companyOrderMail.blade.php ENDPATH**/ ?>