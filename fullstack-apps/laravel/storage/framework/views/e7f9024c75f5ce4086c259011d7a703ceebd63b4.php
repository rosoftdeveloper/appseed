<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/apple-icon.png')); ?>">
<link rel="icon" type="image/png" href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/favicon.png')); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title><?php echo e(config('app.name', 'Laravel')); ?></title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

<?php echo $__env->yieldPushContent('before-head-resources'); ?>

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<!-- CSS Files -->
<link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/css/now-ui-kit.css?v=1.2.2')); ?>" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/demo/demo.css')); ?>" rel="stylesheet" />
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
</script>
<!-- End Google Tag Manager -->

<?php echo $__env->yieldPushContent('after-head-resources'); ?>

</head>
