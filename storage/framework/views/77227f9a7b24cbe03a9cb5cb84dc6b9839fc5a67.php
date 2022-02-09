<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo e(asset('/images/logo/shortcut-logo.png')); ?>" type="image/png" sizes="30x30">
  <title>ShareWheel</title>

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
  

  <!-- ShareWheel CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('/css/sharewheel.css')); ?>" />

  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Bootstrap JS -->
  <!-- <script src="<?php echo e(asset('/bootstrap/js/bootstrap.min.js')); ?>"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="<?php echo e(asset('/js/sharewheel.js')); ?>"></script>
</head>

<body onload="myPreloader()">
  <!-- Preloader -->
  <div id="loading"
    style="background: rgba(255, 255, 255, 0.3) url('<?php echo e(asset('/images/loading/eclipse-preloader.gif')); ?>') no-repeat center ;">
  </div>

  <!-- Content Section -->
  <?php echo $__env->yieldContent('auth-content'); ?>
  <!-- Content Section end -->

  <!-- Scroll Top Button -->
  <button onclick="scrollToTop()" id="scroll-btn" title="Go to top">
    <i style="color:white" class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>
  <!-- Scroll Top Button End -->
  <script>
    // Laoding Spinner on buttons
      (function(){
          $('.myRegisterForm').on('submit', function(){
          $('.myRegisterButton').hide();
          $('.spinner-myRegisterButton').show();
          $('.spinner-myRegisterButton').attr('disabled', 'true');
         
          })
      })();
  </script>

</body>

</html><?php /**PATH C:\Users\priansu\Desktop\MajorProject-12-06-4_15pm\ShareWheel\resources\views/auth/auth-layout.blade.php ENDPATH**/ ?>