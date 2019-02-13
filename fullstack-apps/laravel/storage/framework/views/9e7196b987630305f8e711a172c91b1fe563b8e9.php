<?php $__env->startSection('content'); ?>
    
        <div class="page-header-image" style="background-image:url('<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/bg18.jpg')); ?>')"></div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">Marketing</h5>
                                <p class="description">
                                    We've created the marketing campaign of the website. It was a very interesting collaboration.
                                </p>
                            </div>
                        </div>

                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="now-ui-icons media-1_button-pause"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">Fully Coded in HTML5</h5>
                                <p class="description">
                                    We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                </p>
                            </div>
                        </div>

                        <div class="info info-horizontal">
                            <div class="icon icon-info">
                                <i class="now-ui-icons users_single-02"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">Built Audience</h5>
                                <p class="description">
                                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mr-auto">

                        <div class="card card-signup">
                            <div class="card-body">
                                <h4 class="card-title text-center">Register</h4>
                                <div class="social text-center">
                                    <button class="btn btn-icon btn-round btn-twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-icon btn-round btn-dribbble">
                                        <i class="fab fa-dribbble"></i>
                                    </button>
                                    <button class="btn btn-icon btn-round btn-facebook">
                                        <i class="fab fa-facebook"> </i>
                                    </button>
                                    <h5 class="card-description"> or be classical </h5>
                                </div>

                                <form class="form" method="POST" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Name..." autocomplete="fullname" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                                    </div>
                                    
                                        
                                            
                                        
                                        
                                    

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons ui-1_email-85"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Your Email..." autocomplete="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                                    </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Password confirmation..." name="password_confirmation" required>
                            </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code -->

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="form-check-sign"></span>
                                            I agree to the terms and <a href="#something">conditions</a>.
                                        </label>
                                    </div>

                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary btn-round btn-lg">Get Started</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->startPush('after-head-resources'); ?>
        <style>
            .info.info-horizontal {
                padding: 0px !important;
            }
        </style>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make(config('themes.assets.' . session('theme')) . '.layouts.register', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>