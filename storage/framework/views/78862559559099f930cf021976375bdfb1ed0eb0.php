

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
<!-- 
       <?php echo e($order['user']['role']); ?>

       <?php echo e($order['order_id']); ?> -->
       <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Order Details [ #<?php echo e($order->order_id); ?> ]</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-6">
                            <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/vehicle_images/<?php echo e($order->vehicle_image1); ?>"/><br><br>
                            <h3><?php echo e($order->vehicle_title); ?></h3><br>
                            <strong>Quantity: </strong><?php echo e($order->quantity); ?><br>
                            <strong>Total Price: </strong><?php echo e($order->total_price); ?><br>
                            <strong>Mode of Payment: </strong><?php echo e($order->payment_mode); ?><br>
                            <strong>Payment: </strong><?php if($order->is_paid===0): ?><span class="text-danger">Unpaid</span> <?php else: ?> <span class="text-success">Paid</span> <?php endif; ?><br>
                            <strong>Reservation: </strong><?php if($order->is_completed===0): ?><span class="text-danger">Pending</span> <?php else: ?> <span class="text-success">Completed</span> <?php endif; ?><br>
                            <strong>Date of Reservation: </strong><span class="date"><?php echo e(\Carbon\Carbon::parse($order->created_at)->format('M-d-Y')); ?>, <?php echo e($order->created_at->toTimeString()); ?></span><br>
                        </div>
                        
                        <div class="col-lg-6">
                            <img class="my-admin-vehicle-detail-img img-fluid" src="/storage/user_profile_images/<?php echo e($order->profile_image); ?>"/><br><br>
                            <strong>Booked By: </strong><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?><br>
                            <strong>Reservation Address: </strong><?php echo e($order->country_name); ?>, <?php echo e($order->order_address); ?><br>
                            <strong>Reservation Contact: </strong><?php echo e($order->order_contact); ?><br>
                            <strong>Reservation Email: </strong><?php echo e($order->email); ?><br>
                            <strong>Driver Needed: </strong><?php if($order->driver===0): ?>No <?php else: ?> Yes <?php endif; ?><br>
                            
                        </div>
                    </div>
                    
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/order-details.blade.php ENDPATH**/ ?>