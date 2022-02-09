

<?php $__env->startSection('content'); ?>
<!-- Heading of every pages -->
<div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/heading.jpeg')); ?>'); height:90px;">
    <h3 class="text-light pt-4 text-center"><b>SEARCH RESULTS...</b></h3>
</div>
<div class="container">
    <?php if(isset($details)): ?>
        <?php if($brand_filter != "" && $category_filter == ""): ?>
            <p class="my-text">The result for your brand "<b><?php echo e($brand_filter); ?></b>" are : <?php echo e($total_results); ?> in this page</p>
        <?php elseif($brand_filter == "" && $category_filter != ""): ?>
            <p class="my-text">The result for your category "<b><?php echo e($category_filter); ?></b>" are : <?php echo e($total_results); ?> in this page</p>
        <?php elseif($brand_filter != "" && $category_filter != ""): ?>
            <p class="my-text">The result for your brand "<b><?php echo e($brand_filter); ?></b>" and category "<b><?php echo e($category_filter); ?></b>" are : <?php echo e($total_results); ?> in this page</p>
        <?php endif; ?>
        <div class="row my-pagination">
            <?php echo e($details->appends(['search' => Request::get('page')])->links('pagination')); ?>

        </div>
        <hr>
        <div class="row">
            <div class="card col-3 mb-5">
                <?php if(Auth::guest()): ?>
                    <form action="/filter-search" method="GET">
                        <div class="mt-3 ml-3">
                            <button class="btn my-button" type="submit">Apply Filter</button>
                            <button class="btn btn-danger" type="reset">Remove Filter</button>
                        </div>
                        <div id="accordion">
                            <div class="card mt-3 mb-3">
                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Brands 
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <?php $__currentLoopData = $search_brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($search_brand->brand == $brand_filter): ?>
                                            <input class="chb" type="checkbox" value="<?php echo e($search_brand->brand); ?>" id="<?php echo e($search_brand->brand); ?>" name="brand_filter" checked> <label for="<?php echo e($search_brand->brand); ?>"><?php echo e($search_brand->brand); ?></label> <br>
                                        <?php else: ?>
                                            <input class="chb" type="checkbox" value="<?php echo e($search_brand->brand); ?>" id="<?php echo e($search_brand->brand); ?>" name="brand_filter" > <label for="<?php echo e($search_brand->brand); ?>"><?php echo e($search_brand->brand); ?></label> <br>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div id="headingTwo" class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Categories
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <?php $__currentLoopData = $search_categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($search_category->category ==  $category_filter): ?>
                                            <input class="chb1" type="checkbox" value="<?php echo e($search_category->category); ?>" id="<?php echo e($search_category->category); ?>" name="category_filter" checked> <label for="<?php echo e($search_category->category); ?>"><?php echo e($search_category->category); ?></label> <br>
                                        <?php else: ?>
                                            <input class="chb1" type="checkbox" value="<?php echo e($search_category->category); ?>" id="<?php echo e($search_category->category); ?>" name="category_filter"> <label for="<?php echo e($search_category->category); ?>"><?php echo e($search_category->category); ?></label> <br>
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
                <?php else: ?>
                    <form action="/filtered-search" method="GET">
                        <div class="mt-3 ml-3">
                            <button class="btn my-button" type="submit">Apply Filter</button>
                            <button class="btn btn-danger" type="reset">Remove Filter</button>
                        </div>
                        <div id="accordion">
                            <div class="card mt-3 mb-3">
                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Brands 
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <?php $__currentLoopData = $search_brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($search_brand->brand == $brand_filter): ?>
                                            <input class="chb" type="checkbox" value="<?php echo e($search_brand->brand); ?>" id="<?php echo e($search_brand->brand); ?>" name="brand_filter" checked> <label for="<?php echo e($search_brand->brand); ?>"><?php echo e($search_brand->brand); ?></label> <br>
                                        <?php else: ?>
                                            <input class="chb" type="checkbox" value="<?php echo e($search_brand->brand); ?>" id="<?php echo e($search_brand->brand); ?>" name="brand_filter" > <label for="<?php echo e($search_brand->brand); ?>"><?php echo e($search_brand->brand); ?></label> <br>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div id="headingTwo" class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Categories
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <?php $__currentLoopData = $search_categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($search_category->category ==  $category_filter): ?>
                                            <input class="chb1" type="checkbox" value="<?php echo e($search_category->category); ?>" id="<?php echo e($search_category->category); ?>" name="category_filter" checked> <label for="<?php echo e($search_category->category); ?>"><?php echo e($search_category->category); ?></label> <br>
                                        <?php else: ?>
                                            <input class="chb1" type="checkbox" value="<?php echo e($search_category->category); ?>" id="<?php echo e($search_category->category); ?>" name="category_filter"> <label for="<?php echo e($search_category->category); ?>"><?php echo e($search_category->category); ?></label> <br>
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
                <?php endif; ?>
            </div>
            <div class="col-9">
                <div class="row my-vehicle-list">
                    <?php $__currentLoopData = $details ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($vehicle->vehicle_is_published==1): ?>
                            <div class="col-4 mb-5">
                                <div class="card" style="width: 17rem;">
                                    <img src="/storage/vehicle_images/<?php echo e($vehicle-> vehicle_image1); ?>"  style="width:auto; height:13rem" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title my-text text-center"><?php echo e($vehicle->vehicle_title); ?></h5>
                                        <p class="card-text my-text text-center  mb-4"><?php echo e($vehicle->vehicle_price); ?>/hr</p>
                                        <?php if($vehicle->vehicle_quantity < 1): ?>
                                            <strike class="text-danger"><p class="card-text text-danger text-center  mb-4">Out Of Stock!</p></strike>
                                        <?php elseif($vehicle->vehicle_quantity <= 2): ?>
                                            <p class="card-text text-warning text-center  mb-4">Only <?php echo e($vehicle->vehicle_quantity); ?> left. Hurry Up!</p>
                                        <?php else: ?>
                                            <p class="card-text text-success text-center  mb-4">In Stock: <?php echo e($vehicle->vehicle_quantity); ?></p>
                                        <?php endif; ?>
                                            <a href="/view-details/<?php echo e($vehicle->id); ?>" role="button" class="btn my-button">View Details</a>
                                        <?php if($vehicle->vehicle_quantity < 1): ?>
                                            <a href="#"  role="button" class="btn my-button disabled">Book Now</a>
                                        <?php else: ?>
                                            <a href="#" role="button" class="btn my-button">Book Now</a>
                                        <?php endif; ?>
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
        $(this).prop('checked', true);
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/filter-search.blade.php ENDPATH**/ ?>