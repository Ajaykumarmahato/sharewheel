

<?php $__env->startSection('managerContent'); ?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="feedback-header-text">Register New Product</span>
                            <a href="/manager-products" class="create-button"><button
                                    class="btn my-button">BACK</button></a>
                        </div>
                        <div class="card-body card-block">
                            <form method="POST" action="/manager-products/create-product" enctype="multipart/form-data"
                                class="form-horizontal myRegisterForm">
                                <?php echo csrf_field(); ?>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input1" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input1" value="<?php echo e(old('vehicle_title')); ?>"
                                            name="vehicle_title" placeholder="Example: Getz 2100 "
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
                                            <option value="<?php echo e($v_brand->brand); ?>"
                                                <?php echo e(old('vehicle_brand') === $v_brand->brand ? 'selected' : ''); ?>>
                                                <?php echo e($v_brand->brand); ?></option>
                                            <!-- <?php if(old('vehicle_brand') == $v_brand->brand): ?>

                                                    <option value="<?php echo e($v_brand->brand); ?>" selected><?php echo e($v_brand->brand); ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($v_brand->brand); ?>"><?php echo e($v_brand->brand); ?></option>
                                                <?php endif; ?>                                            -->
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input2" class=" form-control-label">Model</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input2" value="<?php echo e(old('vehicle_model')); ?>"
                                            name="vehicle_model" placeholder="Example: 2120"
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
                                            value="<?php echo e(old('vehicle_quantity')); ?>" name="vehicle_quantity"
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
                                            placeholder="Example: Color Available in Black and Silver"
                                            class="form-control <?php $__errorArgs = ['vehicle_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input"><?php echo e(old('vehicle_description')); ?></textarea>
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
                                        <input type="text" id="text-input4" value="<?php echo e(old('vehicle_engine')); ?>"
                                            name="vehicle_engine" placeholder="Example: 1000"
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
                                        <label class=" form-control-label">Fuel Type</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="my-radio-button form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="vehicle_fuel_type"
                                                    <?php echo e(old('vehicle_fuel_type') == 'Diesel' ? 'checked' : ''); ?>

                                                    value="Diesel" class="form-check-input my-input">Diesel
                                            </label>
                                            <label for="inline-radio2" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio2" name="vehicle_fuel_type"
                                                    <?php echo e(old('vehicle_fuel_type') == 'Petrol' ? 'checked' : ''); ?>

                                                    value="Petrol" class="form-check-input my-input">Petrol
                                            </label>
                                            <label for="inline-radio3" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio3" name="vehicle_fuel_type"
                                                    <?php echo e(old('vehicle_fuel_type') == 'Electric' ? 'checked' : ''); ?>

                                                    value="Electric" class="form-check-input my-input">Electric
                                            </label>
                                            <label for="inline-radio4" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio4" name="vehicle_fuel_type"
                                                    <?php echo e(old('vehicle_fuel_type') == 'Hybrid(Petrol/Electric/Diesel)' ? 'checked' : ''); ?>

                                                    value="Hybrid(Petrol/Electric/Diesel)"
                                                    class="form-check-input my-input">Hybrid(Petrol/Electric/Diesel)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Attributes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="attribute[]"
                                                        value="Power Window" class="form-check-input">Power Window
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="attribute[]"
                                                        value="Power Steering" class="form-check-input">Power Steering
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="attribute[]"
                                                        value="Central Lock" class="form-check-input">Central Lock
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox4" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox4" name="attribute[]"
                                                        value="Tubeless Tyres" class="form-check-input">Tubeless Tyres
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox5" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox5" name="attribute[]"
                                                        value="Keyless Remote Entry" class="form-check-input">Keyless
                                                    Remote Entry
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox6" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox6" name="attribute[]"
                                                        value="Anti-lock Braking (ABS)"
                                                        class="form-check-input">Anti-lock Braking (ABS)
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox7" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox7" name="attribute[]"
                                                        value="Air Bags" class="form-check-input">Air Bags
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox8" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox8" name="attribute[]"
                                                        value="Steering Mounted Controls"
                                                        class="form-check-input">Steering Mounted Controls
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox9" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox9" name="attribute[]"
                                                        value="Air Conditioner" class="form-check-input">Air Conditioner
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox10" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox10" name="attribute[]"
                                                        value="Fog Lights" class="form-check-input">Fog Lights
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox11" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox11" name="attribute[]"
                                                        value="Electric Side Mirror (ORVM)"
                                                        class="form-check-input">Electric Side Mirror (ORVM)
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox12" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox12" name="attribute[]"
                                                        value="Push Engine Start Button" class="form-check-input">Push
                                                    Engine Start Button
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox13" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox13" name="attribute[]"
                                                        value="LCD Touchscreen Entertainment"
                                                        class="form-check-input">LCD Touchscreen Entertainment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input5" class=" form-control-label">Plate Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input5" value="<?php echo e(old('vehicle_plate_number')); ?>"
                                            name="vehicle_plate_number" placeholder="Example: NA BA 32123"
                                            class="form-control <?php $__errorArgs = ['vehicle_plate_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_plate_number'];
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
                                        <small class="form-text text-muted">Enter the Plate Number</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select2" class=" form-control-label">Number of Seats</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="vehicle_seat_number" id="select2" class="form-control my-input">
                                            <?php if(old('vehicle_seat_number') == ""): ?>
                                            <option value="Select Seats in Vehicle" selected>Select Seats in Vehicle
                                            </option>
                                            <?php else: ?>
                                            <option value="<?php echo e(old('vehicle_seat_number')); ?>">
                                                <?php echo e(old('vehicle_seat_number')); ?></option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 2): ?>
                                            <option value="2">2</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 4): ?>
                                            <option value="4">4</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 5): ?>
                                            <option value="5">5</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 6): ?>
                                            <option value="6">6</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 7): ?>
                                            <option value="7">7</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 10): ?>
                                            <option value="10">10</option>
                                            <?php endif; ?>
                                            <?php if(old('vehicle_seat_number') != 15): ?>
                                            <option value="15">15</option>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input6" class=" form-control-label">Price/Hour</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input6" value="<?php echo e(old('vehicle_price')); ?>"
                                            name="vehicle_price" placeholder="Example: 200/-"
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
                                        <label for="select3" class=" form-control-label">Categories</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="vehicle_category" id="select3" class="form-control my-input">
                                            <?php $__currentLoopData = $categories ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->category); ?>"
                                                <?php echo e(old('vehicle_category') === $category->category ? 'selected' : ''); ?>>
                                                <?php echo e($category->category); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input1" class=" form-control-label">Vehicle Image (1)</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input1" name="vehicle_image1"
                                            class="form-control-file <?php $__errorArgs = ['vehicle_image1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> my-input">
                                        <?php $__errorArgs = ['vehicle_image1'];
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
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input2" class=" form-control-label">Vehicle Image (2)</label>
                                        <small class="text-muted text-form"><b>Optional</b></small>
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
                                        <small class="text-muted text-form"><b>Optional</b></small>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input3" name="vehicle_image3"
                                            class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Display</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="my-radio-button form-check-inline form-check">
                                            <label for="inline-radio5" class="form-check-label ">
                                                <input type="radio" id="inline-radio5" name="vehicle_is_published"
                                                    <?php echo e(old('vehicle_is_published') == 1 ? 'checked' : ''); ?> value="1"
                                                    class="form-check-input my-input">YES
                                            </label>
                                            <label for="inline-radio6" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio6" name="vehicle_is_published"
                                                    <?php echo e(old('vehicle_is_published') == 0 ? 'checked' : ''); ?> value="0"
                                                    class="form-check-input my-input">NO
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Featured</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="my-radio-button form-check-inline form-check">
                                            <label for="inline-radio7" class="form-check-label ">
                                                <input type="radio" id="inline-radio7" name="vehicle_is_featured"
                                                    <?php echo e(old('vehicle_is_featured') == 1 ? 'checked' : ''); ?> value="1"
                                                    class="form-check-input my-input">YES
                                            </label>
                                            <label for="inline-radio8" class="form-check-label pl-3">
                                                <input type="radio" id="inline-radio8" name="vehicle_is_featured"
                                                    <?php echo e(old('vehicle_is_featured') == 0 ? 'checked' : ''); ?> value="0"
                                                    class="form-check-input my-input">NO
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="div mt-4">
                                    <button type="submit" class="myRegisterButton btn my-button">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                    <button type="submit" class="btn my-button" id="spinner-myRegisterButton" href="#"
                                        role="button">
                                        <img src="<?php echo e(asset('/images/loading/spinner.gif')); ?>" alt="spinner"
                                            class="spinner">
                                        </i> Submitting...
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
                                                    <input type="checkbox" id="checkbox1" name="feature1" value="option1" class="form-check-input">Option 1
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
<?php echo $__env->make('manager/managerLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/manager/create-product.blade.php ENDPATH**/ ?>