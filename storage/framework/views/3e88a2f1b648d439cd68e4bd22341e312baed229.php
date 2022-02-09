

<?php $__env->startSection('content'); ?>

<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/bg.jpg')); ?>'); height:150px;">
    <p class="text-light pt-4 text-center" style="font-size:70px;">SEARCH RESULTS...</p>
</div>
<!-- Heading of every pages  -->

<div class="container">
    <?php if(isset($details)): ?>
    <p class="my-text">The result for your query "<b><?php echo e($query); ?></b>" are : <?php echo e($total_results); ?> in this page</p>
    <div class="row my-pagination">
        <?php echo e($details->appends(['search' => Request::get('page')])->links('pagination')); ?>

    </div>
    <hr>
    <div class="row">
        <div class="card col-3 mb-5">
            <form action="/filtered-search" method="GET">
                <div class="mt-3 ml-3">
                    <button class="btn my-button" type="submit">Apply Filter</button>
                    <button class="btn btn-danger" type="reset">Remove Filter</button>
                </div>
                <!-- <div class="div mt-3 mb-3">
                            <select name="sort" id="select" class="form-control my-input">
                                <option  value="all">Sort By</option>
                                <option  value="newest-arrival" >Newest Arrival</option>
                                <option  value="price-high-to-low" >High to Low(Price)</option>
                                <option  value="price-low-to-high" >Low to High(Price)</option>
                            </select>
                        </div> -->
                <div id="accordion">
                    <div class="card mt-3 mb-3">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Brands
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($brand->brand == $query): ?>
                                <input class="chb" type="checkbox" value="<?php echo e($brand->brand); ?>" id="<?php echo e($brand->brand); ?>"
                                    name="brand_filter" checked> <label
                                    for="<?php echo e($brand->brand); ?>"><?php echo e($brand->brand); ?></label> <br>
                                <?php else: ?>
                                <input class="chb" type="checkbox" value="<?php echo e($brand->brand); ?>" id="<?php echo e($brand->brand); ?>"
                                    name="brand_filter"> <label for="<?php echo e($brand->brand); ?>"><?php echo e($brand->brand); ?></label> <br>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div id="headingTwo" class="card-header collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Categories
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <?php $__currentLoopData = $categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->category == $query): ?>
                                <input class="chb1" type="checkbox" value="<?php echo e($category->category); ?>"
                                    id="<?php echo e($category->category); ?>" name="category_filter" checked> <label
                                    for="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></label> <br>
                                <?php else: ?>
                                <input class="chb1" type="checkbox" value="<?php echo e($category->category); ?>"
                                    id="<?php echo e($category->category); ?>" name="category_filter"> <label
                                    for="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></label> <br>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-3 ml-3">
                    <button class="btn my-button" type="submit">Apply Filter</button>
                    <button class="btn btn-danger" type="reset">Remove Filter</button>
                </div>
            </form>
        </div>
        <div class="col-9">
            <div class="row my-vehicle-list">
                <?php $__currentLoopData = $details ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($vehicle->vehicle_is_published==1): ?>
                <div class="col-4 mb-5">
                    <div class="card" style="width: 17.1rem;">
                        <div class="image-container">
                            <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>"
                                style="width:17rem; height:14rem" class="card-img-top" alt="...">
                            <a href="/view-details/<?php echo e($vehicle->slug); ?>">
                                <div class="all-overlay">
                                    <div class="overlay-button">
                                        <p class="text-decoration-none text-light">View
                                            Details</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a class="my-link" href="/view-details/<?php echo e($vehicle->slug); ?>">
                                <h5 class="card-title my-text text-center"><?php echo e($vehicle->vehicle_title); ?></h5>
                            </a>
                            <p class="card-text my-text text-center  mb-4">Rs&nbsp;<?php echo e($vehicle->vehicle_price); ?>/hr</p>
                            <?php if($vehicle->vehicle_quantity < 1): ?> <strike class="text-danger">
                                <p class="card-text text-danger text-center  mb-4">Out Of Stock!</p></strike>
                                <?php elseif($vehicle->vehicle_quantity <= 2): ?> <p
                                    class="card-text text-warning text-center  mb-4">Only
                                    <?php echo e($vehicle->vehicle_quantity); ?> left. Hurry Up!</p>
                                    <?php else: ?>
                                    <p class="card-text text-success text-center  mb-4">In Stock:
                                        <?php echo e($vehicle->vehicle_quantity); ?></p>
                                    <?php endif; ?>
                                    <a href="#" role="button" class="btn my-button">Add to Cart</a>
                                    <a href="#" role="button"
                                        class="btn my-button ml-3 <?php echo e($vehicle->vehicle_quantity < 1 ? 'disabled' : ''); ?>">Book
                                        Now</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <p>No results found!</p>
    <?php endif; ?>

</div>
<script>
    $(".chb").change(function() {
        $(".chb").prop('checked', false);
        $(this).prop('checked', true);
       
    });
    
    $(".chb1").change(function() {
        $(".chb1").prop('checked', false);
        $(this).prop('checked', true);sss
        
    });

    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/search.blade.php ENDPATH**/ ?>