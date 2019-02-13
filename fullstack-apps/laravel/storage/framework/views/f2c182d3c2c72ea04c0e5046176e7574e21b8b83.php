<?php $__env->startSection('code', '419'); ?>
<?php $__env->startSection('title', __('Page Expired')); ?>

<?php $__env->startSection('image'); ?>
<div style="background-image: url('/svg/403.svg');" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('message', __('Sorry, your session has expired. Please refresh and try again.')); ?>

<?php echo $__env->make('errors::illustrated-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>