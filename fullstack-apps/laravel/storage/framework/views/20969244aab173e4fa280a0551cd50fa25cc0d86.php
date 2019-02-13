<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="bg-default">

    <!-- Main content -->
    <div class="main-content">

        <?php echo $__env->yieldContent('content'); ?>

    </div>

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.footer-auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'includes.footer-resources', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
