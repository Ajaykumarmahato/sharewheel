

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">YOUR BOOKINGS</p>
</div>
<!-- Heading of every pages  -->

<div class="container">

    <div class="row">
        <table class="table borderless my-text">
            <tbody>
                <tr>
                    <th scope="row"><label>Vehicle Name </label></th>
                    <th scope="row"><label>Image</label></th>
                    <th scope="row"><label>Price/hr </label></th>
                    <th scope="row"><label>Quantity</label></th>
                    <th scope="row"><label>Brand</label></th>
                    <th scope="row"><label>Model</label></th>
                    <th scope="row"><label>Total Price </label></th>
                    <th scope="row"><label>Action</label></th>
                </tr>
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    

                    <td scope="row"><?php echo e($item->associatedModel->vehicle_title); ?></td>
                    <td scope="row"><img src="/storage/vehicle_images/<?php echo e($item->associatedModel->vehicle_image1); ?>"
                            alt="image" style="width:100px;height:auto" /></td>
                    <td scope="row"><?php echo e($item->associatedModel->vehicle_price); ?></td>
                    <td scope="row"><?php echo e($item->associatedModel->vehicle_quantity); ?></td>
                    <td scope="row"><?php echo e($item->associatedModel->vehicle_brand); ?></td>
                    <td scope="row"><?php echo e($item->associatedModel->vehicle_model); ?></td>
                    <td scope="row"></td>
                    <td scope="row"><button class="btn btn-danger">X</button></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    <div class="row mt-5 mb-5">
        <div class="col-3">
            <button class="btn my-button text-light">Continue Shopping</button>
        </div>
        <div class="col-6"></div>
        <div class="col-3">
            <button class="btn my-button text-light">Update Cart</button>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6"></div>
        <div class="col-6 card my-text">
            <h4 class="mt-3 mb-3">Cart Total</h4>
            <table class="table borderless my-text">
                <tbody>
                    <tr>
                        <th scope="row"><label>Subtotal</label></th>
                        <td>Rs. 1000</td>
                    </tr>
                    <tr>
                        <th scope="row"><label>Total</label></th>
                        <td>Rs. 1000</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn my-button text-light mt-3 mb-3">
                PROCEED TO CHECKOUT
            </button>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/cart.blade.php ENDPATH**/ ?>