<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    .background {
        background: url('/images/email/background.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }

    .email-container {
        background-color: aliceblue;
        margin: 20% 20%;
        /* padding: 20%; */
        text-align: center;
        height: auto;
    }

    .header {
        text-align: center;
        margin: 20px 10px 20px 10px;
    }

    .content {
        text-align: center;
    }

    .footer {
        text-align: center;
        background-color: rgb(139, 218, 218);
    }

    .my-button {
        background-color: #01a99d;
        height: 30px;
        color: white;
        border: none;
        border-radius: 1px;
        font-size: 20px;
    }

    .my-button:hover {
        background-color: #107a73;
        color: white;
    }

    .image {
        height: 100px;
        width: 250px;
    }
</style>

<div class="container">
    <div class="background">
        <div class="email-container pt-5 pb-5">
            <h2 class="header">Hi, <b><?php echo e($first_name); ?></b>!</h2>
            <div class="content">
                <p>Please verify that your email is <b><i><?php echo e($email); ?></i></b> and that you entered it when signing up
                    for <b>Sharewheel</b> <br />
                    Also, to activate your user account in <b>ShareWheel,</b> <span>Click on the button below</span>
                </p>
                <a class="btn-btn" href="<?php echo e(url('user/activation', $link)); ?>">
                    <button class="my-button mb-3">
                        Activate My Account
                    </button>
                </a>
            </div>
            <p class="footer">
                Happy Renting, <br />
                Safe Riding! <br />
                The Sharewheel Team
            </p>
            <p><b>For more information contact us at,</b> <br>
                <i>Email : sharewheel2020@gmail.com </i> <br>
                <i>Contact Number: +977 9845867602, +977 9843232447 </i>
            </p>
            <a href="<?php echo e(asset ('/')); ?>" style="text-align:center"><img
                    src="<?php echo e(asset('/images/logo/sharewheel-logo.png')); ?>" class="image" alt="sharewheel"> </a>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/mail/activation.blade.php ENDPATH**/ ?>