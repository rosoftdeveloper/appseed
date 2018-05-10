


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo base_url(); ?>" rel="tooltip" title="Designed by Creative Tim. Coded by AppSeed" data-placement="bottom">
                    Now Ui Kit
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/static/themes/<?php echo $theme; ?>/assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('profile'); ?>" >
                            <i class="fa fa-users"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('components'); ?>">
                            <i class="fa fa-sitemap"></i>
                            <p>Components</p>
                        </a>
                    </li>

                    <?php if ( logged_in() ) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">
                            <i class="fa fa-sign-out"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login'); ?>">
                            <i class="fa fa-sign-in"></i>
                            <p>Login</p>
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('register'); ?>">
                            <i class="fa fa-user-plus"></i>
                            <p>Register</p>
                        </a>
                    </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" 
                            href="<?php echo $assets->SOCIAL_TWITTER; ?>" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" 
                           href="<?php echo $assets->SOCIAL_FBK; ?>" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" 
                           href="<?php echo $assets->SOCIAL_INSTAGRAM; ?>" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

