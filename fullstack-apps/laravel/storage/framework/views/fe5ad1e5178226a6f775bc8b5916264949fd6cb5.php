<?php $__env->startSection('content'); ?>

    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.about-us', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.testimonials-1', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.pricing-2', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.contact-us', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>