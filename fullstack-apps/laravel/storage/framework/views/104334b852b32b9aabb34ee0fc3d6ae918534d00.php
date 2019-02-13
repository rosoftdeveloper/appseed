<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="<?php echo e(url('/theme/argon2')); ?>">
                <img src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/brand/white.png')); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php echo e(url('/theme/argon2')); ?>">
                                <img src="<?php echo e(asset(config('themes.assets.' . session('theme')) . '/assets/img/brand/blue.png')); ?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/webappseed" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/groups/407230609806980" target="_blank" data-toggle="tooltip" title="" data-original-title="Join our Facebook Group">
                            <i class="fa fa-facebook"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.twitter.com/webappseed" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://github.com/rosoftdeveloper/appseed/tree/master/coded-apps/php-ci-jq" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
                            <i class="fa fa-github"></i>
                            <span class="nav-link-inner--text d-lg-none">Github</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.youtube.com/channel/UCSEnv6MeRzmFXAnG5baXC_Q" target="_blank" data-toggle="tooltip" title="" data-original-title="Join us on Youtube">
                            <i class="fa fa-youtube"></i>
                            <span class="nav-link-inner--text d-lg-none">Youtube</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block ml-lg-4">
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-neutral"><span class="nav-link-inner--text"><?php echo e(__(session('theme').'.login')); ?></span></a>
                        <?php else: ?>
                            <a href="<?php echo e(route('logout')); ?>" class="btn btn-neutral" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="nav-link-inner--text"><?php echo e(__(session('theme').'.logout')); ?></span>
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;" class="nav-link">
                                <?php echo csrf_field(); ?>
                            </form>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
