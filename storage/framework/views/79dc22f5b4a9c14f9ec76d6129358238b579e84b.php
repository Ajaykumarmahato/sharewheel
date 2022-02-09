

<?php $__env->startSection('managerContent'); ?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12 my-wraper-feedback">
                    <div class="row card-header">
                        <span class="feedback-header-text">Our Categories</span>
                        <a href="/manager-categories/create-category" class="create-button"><button
                                class="btn my-button">+ Add New Category</button></a>
                    </div>
                    <div class="row card-body card-block" id="my-feedback-heading">
                        <div class="col-lg-3"><strong>Title</strong></div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3"><strong>Description</strong></div>
                        <div class="col-lg-3"><strong>Action</strong></div>
                        <div class="col-lg-2"></div>
                    </div>
                    <?php $__currentLoopData = $categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row card-body card-block">
                        <div class="col-lg-3">
                            <p class="title">
                                <h4><?php echo e($category->category); ?></h4>
                            </p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-3">
                            <p class="text-justify"> <?php echo e($category->category_description); ?></p>
                        </div>
                        <div class="col-lg-3">
                            <div class="table-data-feature ">
                                <form method="POST" id="delete-form"
                                    action="/manager-categories/<?php echo e($category->category); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button onclick="return confirmDelete();" type="submit"
                                        style="background-color:#808080;" class="item" data-toggle="tooltip"
                                        data-placement="top" title="Delete">
                                        <i style="color:white;" class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="my-hr"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/manager-categories.blade.php ENDPATH**/ ?>