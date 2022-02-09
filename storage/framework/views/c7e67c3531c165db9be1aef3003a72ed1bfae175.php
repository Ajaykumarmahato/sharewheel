<?php if(Session::has('alert.config')): ?>
<?php if(config('sweetalert.animation.enable')): ?>
<link rel="stylesheet" href="<?php echo e(config('sweetalert.animatecss')); ?>">
<?php endif; ?>
<script src="<?php echo e($cdn?? asset('vendor/sweetalert/sweetalert.all.js')); ?>"></script>
<script>
    Swal.fire(<?php echo Session::pull('alert.config'); ?>);
</script>
<?php endif; ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/vendor/sweetalert/alert.blade.php ENDPATH**/ ?>