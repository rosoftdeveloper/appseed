<?php $__env->startSection('content'); ?>

<main>

    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.cards', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.awesome-features', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.design-system', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.modern-interface', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.team', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.bubble', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'sections.technologies', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(config('themes.view_path.' . session('theme')) . 'layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>