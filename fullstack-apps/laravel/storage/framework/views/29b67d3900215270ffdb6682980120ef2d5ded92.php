<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Design System - Free Design System for Bootstrap 4</title>
    <!-- Favicon -->
    <link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/brand/favicon.png')); ?>" rel="icon" type="image/png">

    <?php echo $__env->yieldPushContent('before-head-resources'); ?>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/nucleo/css/nucleo.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/css/argon.css?v=1.0.1')); ?>" rel="stylesheet">
    <!-- Docs CSS -->
    

    <?php echo $__env->yieldPushContent('after-head-resources'); ?>

</head>
