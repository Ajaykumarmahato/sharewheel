

<?php $__env->startSection('managerContent'); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="feedback-header-text">Edit Product</span>
                            <a href="/manager-products" class="create-button"><button
                                    class="btn my-button">BACK</button></a> </div>
                        <div class="card-body card-block">
                            <form method="POST" action="/manager-products/edit-product/<?php echo e($vehicle->slug); ?>"
                                enctype="multipart/form-data" class="form-horizontal myRegisterForm">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input1" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input1" value="<?php echo e($vehicle->vehicle_title); ?>"
                                            name="vehicle_title" placeholder="Vehicle Title"
                                            class="form-control <?php $__errorArgs = ['vehicle_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Enter Vehicle's Title</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select1" class=" form-control-label">Brand</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="vehicle_brand" id="select1" class="form-control my-input">
                                            <?php $__currentLoopData = $brands ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->vehicle_brand == $v_brand->brand): ?>
                                            <option value="<?php echo e($v_brand->brand); ?>" selected><?php echo e($v_brand->brand); ?>

                                            </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($v_brand->brand); ?>"><?php echo e($v_brand->brand); ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input2" class=" form-control-label">Model</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input2" value="<?php echo e($vehicle->vehicle_model); ?>"
                                            name="vehicle_model" placeholder="Vehicle Model"
                                            class="form-control  <?php $__errorArgs = ['vehicle_model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Enter the Model</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input3" class=" form-control-label">Quantity</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="text-input3" placeholder="Example: 2"
                                            value="<?php echo e($vehicle->vehicle_quantity); ?>" name="vehicle_quantity"
                                            class="form-control  <?php $__errorArgs = ['vehicle_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Enter the Quantity Available</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="vehicle_description" id="textarea-input" rows="9"
                                            placeholder="Write a Description"
                                            class="form-control <?php $__errorArgs = ['vehicle_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input"><?php echo e($vehicle->vehicle_description); ?></textarea>
                                        <?php $__errorArgs = ['vehicle_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Describe Vehicle</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input4" class=" form-control-label">Engine (CC)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input4" value="<?php echo e($vehicle->vehicle_engine); ?>"
                                            name="vehicle_engine"
                                            class="form-control  <?php $__errorArgs = ['vehicle_engine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_engine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Enter the Engine Capacity</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Fuel Type</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="my-radio-button form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="vehicle_fuel_type"
                                                    value="Diesel" class="form-check-input my-input"
                                                    <?php echo e(($vehicle->vehicle_fuel_type=='Diesel')? 'checked' : ''); ?>>Diesel
                                            </label>
                                            <label for="inline-radio2" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio2" name="vehicle_fuel_type"
                                                    value="Petrol" class="form-check-input my-input"
                                                    <?php echo e(($vehicle->vehicle_fuel_type=='Petrol')? 'checked' : ''); ?>>Petrol
                                            </label>
                                            <label for="inline-radio3" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio3" name="vehicle_fuel_type"
                                                    value="Hybrid(Petrol/Electric/Diesel)"
                                                    class="form-check-input my-input"
                                                    <?php echo e(($vehicle->vehicle_fuel_type=='Hybrid(Petrol/Electric/Diesel)')? 'checked' : ''); ?>>Hybrid(Petrol/Electric/Diesel)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input5" class=" form-control-label">Plate Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input5" value="<?php echo e($vehicle->vehicle_plate_number); ?>"
                                            name="vehicle_plate_number" placeholder="Vehicle Plate Number"
                                            class="form-control my-input" disabled>
                                        <small class="form-text text-muted">Plate Number Cannot be Changed</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input6" class=" form-control-label">Price/Hour</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input6" value="<?php echo e($vehicle->vehicle_price); ?>"
                                            name="vehicle_price" placeholder="Vehicle Price"
                                            class="form-control <?php $__errorArgs = ['vehicle_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <small class="form-text text-muted">Enter the Price/Hour</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select2" class=" form-control-label">Categories</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="vehicle_category" id="select2" class="form-control my-input">
                                            <?php $__currentLoopData = $categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->vehicle_category == $category->category): ?>
                                            <option value="<?php echo e($category->category); ?>" selected><?php echo e($category->category); ?>

                                            </option>
                                            <?php else: ?>
                                            <option value="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <small class="text-muted text-form"><b>Optional Fields</b></small><br><br>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input1" class=" form-control-label">Vehicle Image (1)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input1" value="<?php echo e($vehicle->vehicle_image1); ?>"
                                            name="vehicle_image1"
                                            class="form-control-file <?php $__errorArgs = ['vehicle_image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input2" class=" form-control-label">Vehicle Image (2)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input2" name="vehicle_image2"
                                            class="form-control-file <?php $__errorArgs = ['vehicle_image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input3" class=" form-control-label">Vehicle Image (3)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input3" name="vehicle_image3"
                                            class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Featured</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="my-radio-button form-check-inline form-check">
                                            <label for="inline-radio6" class="form-check-label ">
                                                <input type="radio" id="inline-radio6" name="vehicle_is_featured"
                                                    value="1" class="form-check-input my-input"
                                                    <?php echo e(($vehicle->vehicle_is_featured == 1)? 'checked' : ''); ?>>YES
                                            </label>
                                            <label for="inline-radio7" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio7" name="vehicle_is_featured"
                                                    value="0" class="form-check-input my-input"
                                                    <?php echo e(($vehicle->vehicle_is_featured == 0)? 'checked' : ''); ?>>NO
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="div mt-4">
                                    <button type="submit" class="myRegisterButton btn my-button">
                                        <i class="fa fa-paper-plane"></i> Update
                                    </button>
                                    <button type="submit" class="btn my-button" id="spinner-myRegisterButton" href="#"
                                        role="button">
                                        <img src="<?php echo e(asset('/images/loading/spinner.gif')); ?>" alt="spinner"
                                            class="spinner">
                                        Updating...
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Checkboxes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/edit-product.blade.php ENDPATH**/ ?>