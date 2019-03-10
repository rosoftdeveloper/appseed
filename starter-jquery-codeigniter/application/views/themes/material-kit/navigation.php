

  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="/">
          Material Kit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="/profile">
              Profile
            </a>
          </li>

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

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php _github() ?>" target="_blank" data-original-title="Star AppSeed on Github">
              <i class="fa fa-github"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php _twitter() ?>" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php _facebook() ?>" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?php _instagram() ?>" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  