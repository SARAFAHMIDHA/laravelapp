<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/css/custom.css')); ?>">
           </head>
    <body>
    <div>
        <?php echo $__env->make('layouts.inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="<?php echo e(asset('frontend/js/jquery-3.6.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\fahmi\OneDrive\Desktop\laravelapp\app\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>