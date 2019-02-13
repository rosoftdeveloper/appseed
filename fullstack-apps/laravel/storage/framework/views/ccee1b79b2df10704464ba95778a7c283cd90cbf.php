<?php echo $__env->yieldPushContent('before-footer-resources'); ?>
<!-- Core -->
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Optional JS -->
<script src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>
<!-- Argon JS -->
<script src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/js/argon.js?v=1.0.0')); ?>"></script>

<?php echo $__env->yieldPushContent('after-footer-resources'); ?>
