


<?php $__env->startSection('content'); ?>
<!-- Heading of every pages -->
 <div class="mt-5 mb-5" style="background-image: url('<?php echo e(asset('/images/heading/heading.jpeg')); ?>'); height:90px; ">
    
<h3 class="text-light pt-4 text-center"><b>CONTACT US</b></h3>
</div>
<!-- Heading of every pages  -->

    <div class="container">
        <div class="row mt-5 mb-5"></div>
            <!-- icons row -->
            <div class="row mb-5">
                <!-- Contact icon -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-phone fa-3x"></i>
                        <h4>Phone</h4>
                        <p>+977-0101-1010</p>
                    </div>
                </div>
                <!-- Address icon-->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-map-marker fa-3x"></i>
                        <h4>Address</h4>
                        <p>Kathmandu,Nepal</p>
                    </div>
                </div>
                <!-- Open Time icon -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-car fa-3x"></i>
                        <h4>Availability</h4>
                        <p>24 x 7, 365 days/year</p>
                    </div>
                </div>
                <!-- Email icon -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-dollar fa-3x"></i>
                        <h4>Payment Gateway</h4>
                        <p><img src="<?php echo e(asset('/images/logo/esewa.png')); ?>" style="height:25px;width:40px;border-radius:15px" alt="">&nbsp;+977 984224567</p>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <h2 class="my-text text-center"><b>Leave Message</b></h2>
                </div>
                <div class="col-lg-4"></div>
            </div>

            <div class="row mt-5 mb-2">
                <div class="col-lg-6">
                    <div class="input-group mb-4">
                        <input 
                            type="text"
                            class="form-control"
                            placeholder="First Name"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                        />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group mb-4">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Email"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                        />
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-12">
                    <div class="input-group mb-4">
                    <textarea class="form-control message-box" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <button
                        class="mt-3 my-button text-center btn text-decoration-none btn-lg float-center"
                        href="#"
                        role="button"
                    >
                        Send
                    </button>
                    <button
                        class="mt-3 ml-3 text-center btn btn-danger text-decoration-none btn-lg float-center"
                        href="#"
                        role="button"
                    >
                        Cancel
                    </button>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <div class="row mt-5  ml-1 mr-1 mb-5">
            <iframe class="mb-5"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27689214012!2d85.29111326133645!3d27.709031933406965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1920161735ef%3A0x6c089431dddc44e9!2sTech%40rt%20Trekkies%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1590134578103!5m2!1sen!2snp"
                width="800"
                height="600"
                frameborder="0"
                style="border: 0;"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
            ></iframe>
        </div>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ajay\Desktop\MajorProject\ShareWheel\resources\views/contact.blade.php ENDPATH**/ ?>