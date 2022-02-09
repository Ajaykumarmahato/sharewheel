

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<script src="jquery-3.5.1.min.js"></script>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Reservation</span>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-2"><strong>Reservation Id</strong></div>
                        <div class="col-lg-2"><strong>Vehicle Title</strong></div>
                        <div class="col-lg-2"><strong>Booked By</strong></div>
                        <div class="col-lg-1"><strong>Payment Mode</strong></div>
                        <div class="col-lg-1"><strong>Booking Address</strong></div>
                        <div class="col-lg-2"><strong>Total Price</strong></div>
                        <div class="col-lg-2"><strong>Action</strong></div>
                    </div>

                    <?php $__currentLoopData = $orders ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block">
                        <div class="col-lg-2">
                            <p class="title">
                                <a class="my-text-hover" title="View Order Detail"
                                    href="/manager/order/order-details/<?php echo e($order->order_id); ?>"><b>#<?php echo e($order->order_id); ?></b></a>
                            </p>
                        </div>
                        <div class="col-lg-2">
                            <p class="title">
                                <a class="my-text-hover" title="View Vehicle Detail"
                                    href="/manager-products/product-detail/<?php echo e($order->slug); ?>"><?php echo e($order->vehicle_title); ?></a>

                            </p>
                        </div>
                        <div class="col-lg-2">
                            <p><a class="my-text-hover" title="View User Detail"
                                    href="/manager-users/user-detail/<?php echo e($order->username); ?>"><?php echo e($order->first_name); ?>

                                    <?php echo e($order->last_name); ?></a></p>
                        </div>
                        <div class="col-lg-1">
                            <p><?php echo e($order->payment_mode); ?></p>
                        </div>
                        <div class="col-lg-1">
                            <p><?php echo e($order->order_address); ?></p>
                        </div>
                        <div class="col-lg-2">
                            <p>Rs. <?php echo e($order->total_price); ?></p>
                        </div>

                        <div class="col-lg-2">
                            <?php if($order->is_completed===1): ?>
                            <span class="status--process">Completed&nbsp;&nbsp;<i class="fa fa-check-circle"
                                    style="color:#5fb946"></i></span>
                            <?php else: ?>
                            <span class="status--denied" style="display:inline-block">Pending&nbsp;&nbsp;&nbsp;&nbsp;
                                <form style="display:inline-block" method="POST"
                                    action="/manager-orders/<?php echo e($order->order_id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <button type="submit" class="borderless-focus" title="Complete Reservation">
                                        <i class="fa fa-check-circle" style="color:#808080;"></i>
                                    </button>
                                </form>
                            </span>



                            <?php endif; ?>

                            <!-- <form method="POST" action="/manager-products/<?php echo e($order->slug); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <?php if($order->vehicle_is_published == 0): ?>
                            <div class="class-button" style="margin-right:5px;margin-left:0px">
                                <button type="submit" style="background-color:#808080;" class="item" data-toggle="tooltip"
                                    data-placement="top" title="Unblock">
                                    <i style="color:white;" class="zmdi zmdi-check"></i>
                                </button>
                            </div>
                            <?php else: ?>
                            <div class="class-button" style="margin-right:5px">
                                <button type="submit" style="background-color:#808080;" class="item" data-toggle="tooltip"
                                    data-placement="top" title="Block">
                                    <i style="color:white;" class="zmdi zmdi-block"></i>
                                </button>
                            </div>
                            <?php endif; ?>
                        </form> -->


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
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-orders.blade.php ENDPATH**/ ?>