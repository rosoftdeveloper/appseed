
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="<?php echo base_url() ?>">
          <img src="/<?php echo _static() ?>assets/img/brand/white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">

          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo base_url() ?>">
                  <img src="/<?php echo _static() ?>assets/img/brand/blue.png">
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

          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo _assets('LINK_FACEBOOK') ?>" target="_blank" data-toggle="tooltip" 
                title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo _assets('LINK_FACEBOOK_GRP') ?>" target="_blank" data-toggle="tooltip" 
                title="Join our Facebook Group">
                <i class="fa fa-facebook"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo _assets('LINK_TWITTER') ?>" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
                <i class="fa fa-twitter-square"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo _assets('LINK_GITHUB') ?>" target="_blank" data-toggle="tooltip" title="Star us on Github">
                <i class="fa fa-github"></i>
                <span class="nav-link-inner--text d-lg-none">Github</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo _assets('LINK_YOUTUBE') ?>" target="_blank" data-toggle="tooltip" 
                title="Join us on Youtube">
                <i class="fa fa-youtube"></i>
                <span class="nav-link-inner--text d-lg-none">Youtube</span>
              </a>
            </li>
            <li class="nav-item d-none d-lg-block ml-lg-4">

              <?php if ( _is_auth() ) { ?>

                <small class="text-white font-weight-bold mb-0 mr-2"><?php echo _identity(); ?></small>

                <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-neutral btn-icon">
                  <span class="nav-link-inner--text">Logout</span>
                </a>

              <?php } else { ?>

                <a href="<?php echo base_url('auth/login') ?>" class="btn btn-neutral btn-icon">
                  <span class="nav-link-inner--text">Login</span>
                </a>

              <?php } ?>

            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  