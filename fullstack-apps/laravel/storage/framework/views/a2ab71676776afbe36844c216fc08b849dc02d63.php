<?php $__env->startSection('content'); ?>

    <body class="landing-page">
NOGRA THEME
        

        

        

            
            
            
            
            
            

        

    </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('themes.nogra') . 'layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>