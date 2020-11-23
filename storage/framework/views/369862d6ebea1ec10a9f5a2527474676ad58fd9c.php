<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/jpg" href="<?php echo e(asset('images/img/favicon1.png')); ?>" />
    <style>
    h6{color:#563333;border:1px solid;padding: 5px;}
    h1{margin: 0;color: #f30707}
    
    </style>
</head>
<body style="background: #fff;">

<div style="text-align: center;width:450px;margin:0 auto;border:1px solid #481208;margin-top:60px;overflow:hidden;padding:20px;background:#ddd;">
    <img style="width: 100%;" src="<?php echo e(asset('images/error/oops.png')); ?>">
    <h1><?php echo $__env->yieldContent('title'); ?></h1>
    <h6> <b style="color:#000"><?php echo $__env->yieldContent('code', __('Oh no')); ?></b> <br> <?php echo e(chunk_split($exception->getMessage(), 70, ' ')); ?> <br> <small style="text-decoration:underline"><?php echo e(Request::url()); ?></small></h6>
    <br>
    <a style="text-decoration:none;color:#fff;padding: 10px;background: #1d82ff;border-radius: 5px;" href="<?php echo e(url('/home')); ?>"> Go Back home </a>
</div>
</body>
</html><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/errors/errorLayout.blade.php ENDPATH**/ ?>