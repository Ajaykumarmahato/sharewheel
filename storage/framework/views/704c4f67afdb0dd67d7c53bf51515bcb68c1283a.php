<style>
    .my-button {
        background-color: #01a99d;
        height: 50px;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 20px;
    }

    .btn-btn {
        margin-left: 30px;
    }

    .my-button:hover {
        background-color: #107a73;
        color: white;
    }

    img {
        height: 100px;
        width: 250px;
        margin-bottom: 70px;
        margin-left: 400px;
        margin-top: 70px;
    }

    .my-bg {
        background-color: #e9ecef;
        padding-bottom: 100px;
    }

    p {
        color: #01a99d;
        padding-left: 30px;
    }
</style>

<div class="my-bg">

    <a href="<?php echo e(asset ('/')); ?>"><img src="<?php echo e(asset('/images/logo/logo.png')); ?>" alt="sharewheel"> </a>
    <p>WELCOME, <b><?php echo e($first_name); ?> <?php echo e($last_name); ?>!</b> </p>
    <p> To activate your user account in <b>ShareWheel,</b> <span>Click on the button</span></p> <br>
    <a class="btn-btn" href="<?php echo e(url('user/activation', $link)); ?>"><button class="my-button"> Activate Your Account
        </button> </a> <br>

    <p><b>For more information contact us at,</b> <br>
        Email : sharewheel2020@gmail.com <br>
        Contact Number: +977 9845867602, +977 9843232447 </p>

    <p>Regards, <br>
        ShareWheel Team</p>

</div><?php /**PATH C:\Users\Ajay\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/mail/activation.blade.php ENDPATH**/ ?>