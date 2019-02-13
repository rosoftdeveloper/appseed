<?php $__env->startSection('content'); ?>

    <div class="page-header header-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url('<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/login.jpg')); ?>')"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="<?php echo e(route('login')); ?>">

                            <?php echo csrf_field(); ?>

                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/now-logo.png')); ?>" alt="">
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="card-body">

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                </div>


                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                    </div>
                                    <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                                </div>


                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Get Started</button>
                            </div>
                            <div class="pull-left">
                                <h6>
                                    <a href="<?php echo e(route('register')); ?>" class="link footer-link">Create Account</a>
                                </h6>
                            </div>
                            <div class="pull-right">
                                <h6>
                                    <a href="#pablo" class="link footer-link">Need Help?</a>
                                </h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>