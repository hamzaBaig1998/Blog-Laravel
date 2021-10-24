<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href='#' class="p-3">Home</a></li>
            <li><a href='<?php echo e(route('dashboard')); ?>' class="p-3">Dashboard</a></li>
            <li><a href='<?php echo e(route('posts')); ?>' class="p-3">Post</a></li>
        </ul>
        <ul class="flex items-center">
        <?php if(auth()->guard()->check()): ?>
            <li><a href='#' class="p-3"><?php echo e(auth()->user()->name); ?></a></li>
            <li><a href='#' class="p-3">Logout</a></li>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
            <li><a href='#' class="p-3">Login</a></li>
            <li><a href='<?php echo e(route('register')); ?>' class="p-3">Register</a></li>
        <?php endif; ?>  
        </ul>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\wamp64\www\blog\resources\views/layout/app.blade.php ENDPATH**/ ?>