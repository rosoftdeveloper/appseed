


    <!-- Navbar -->
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Material Kit </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">apps</i> Pages
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="<?php echo base_url('components'); ?>" class="dropdown-item">
                                <i class="material-icons">layers</i>Components
                            </a>
                            <a href="<?php echo base_url('profile'); ?>" class="dropdown-item">
                                <i class="material-icons">content_paste</i> Profile
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('help'); ?>">
                            <i class="material-icons">help_outline</i> Help
                        </a>
                    </li>

                    <?php if ( logged_in() ) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">
                            <i class="material-icons">power_settings_new</i> Logout
                        </a>
                    </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login'); ?>">
                            <i class="material-icons">power_settings_new</i> Login
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('register'); ?>">
                            <i class="material-icons">perm_identity</i> Register
                        </a>
                    </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a  class="nav-link" target="_blank"
                            href="https://github.com/rosoftdeveloper/appseed/tree/master/apps/material-kit">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" rel="tooltip" 
                            title="" data-placement="bottom" 
                            href="<?php echo $assets->SOCIAL_TWITTER; ?>" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                            href="<?php echo $assets->SOCIAL_FBK; ?>" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                            href="<?php echo $assets->SOCIAL_INSTAGRAM; ?>" target="_blank" data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

