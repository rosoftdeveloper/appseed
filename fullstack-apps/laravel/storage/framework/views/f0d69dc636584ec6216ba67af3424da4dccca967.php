<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="landing-page">

<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.sections.google-tag-manager', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.sections.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="wrapper">

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make(config('themes.assets.' . session('theme')) . '.sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.includes.footer-resources', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>

