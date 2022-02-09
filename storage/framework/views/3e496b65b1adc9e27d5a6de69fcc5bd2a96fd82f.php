

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Associates</span>
                        <a href="/manager-brands/create-brand" class="create-button"><button class="btn my-button">+
                                Register Brand</button></a>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Image</strong></div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3 ml-1"><strong>Name</strong></div>
                        <div class="col-lg-3"><strong>Description</strong></div>
                        <div class="col-lg-1"><strong>Action</strong></div>
                        <div class="col-lg-1"></div>
                    </div>
                    <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block">
                        <div class="col-lg-3">
                            <img src="/storage/brand_images/<?php echo e($brand->brand_image); ?>" alt="...">
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <p class="title">
                                <h4><?php echo e($brand->brand); ?></h4><br>
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <p class="text-justify"> <?php echo e($brand->brand_description); ?></p> <br>
                            <?php if($brand->brand_link != ""): ?>
                            <p class="text-justify"><a class="my-link" target="__blank" href="<?php echo e($brand->brand_link); ?>">
                                    <i class="fas fa-globe"></i>
                                    Visit site for more details</a></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-1">
                            <div class="table-data-feature mr-3">
                                <form method="POST" id="delete-form" action="/manager-brands/<?php echo e($brand->brand); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirmDelete();" style="background-color:#808080;"
                                        class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i style="color:white;" class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                    <div class="my-hr"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-brands.blade.php ENDPATH**/ ?>