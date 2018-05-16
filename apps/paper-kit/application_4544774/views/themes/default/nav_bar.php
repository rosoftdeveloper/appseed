

    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
        <div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">Paper Kit 2</a>
	            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
	            </button>
			</div>
	        <div class="collapse navbar-collapse" id="navbarToggler">
	            <ul class="navbar-nav ml-auto">
					<li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('components'); ?>">
                            <i class="nc-icon nc-layout-11"></i>Components
                        </a>
	                </li>
					<li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('profile'); ?>">
                            <i class="nc-icon nc-circle-10"></i>Profile
                        </a>
	                </li>

					<li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('help'); ?>">
                            <i class="nc-icon nc-badge"></i>Help
                        </a>
                    </li>
                    
                    <?php if ( logged_in() ) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('logout'); ?>">
                            <i class="nc-icon nc-user-run"></i>Logout
                        </a>
                    </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login'); ?>">
                            <i class="nc-icon nc-single-02"></i>Login
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('register'); ?>">
                            <i class="nc-icon nc-badge"></i>Register
                        </a>
                    </li>
                    <?php } ?>

					<li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none">Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-github"></i>
                            <p class="d-lg-none">GitHub</p>
                        </a>
                    </li>
	            </ul>
	        </div>
		</div>
    </nav>



