
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="/<?php echo _static() ?>assets/img/sidebar-1.jpg">
      <div class="logo">
        <a target="_blank" href="<?php echo _assets('LINK_APP_GENERATOR') ?>" class="simple-text logo-normal">
        Full Stack App
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo ( $page == 'index' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/index">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php echo ( $page == 'user' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/user">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item <?php echo ( $page == 'tables' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/tables">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item <?php echo ( $page == 'typography' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/typography">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item <?php echo ( $page == 'icons' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/icons">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item <?php echo ( $page == 'notifications' ? 'active' : '' ) ?>">
            <a class="nav-link" href="/notifications">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>

          <?php if ( _is_auth() ) { ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('logout'); ?>">
                    <i class="material-icons">person</i>
                    <p>Logout</p>
                </a>
            </li>

            <?php } else { ?>

            <li  class="nav-item">
                <a class="nav-link" href="<?php echo base_url('login'); ?>">
                    <i class="material-icons">person</i>
                    <p>Login</p>
                </a>
            </li>

            <?php } ?>

          <li class="nav-item active-pro ">
            <a target="_blank" class="nav-link" href="<?php echo _assets('LINK_APP_GENERATOR') ?>">
              <i class="material-icons">unarchive</i>
              <p>Get this app in Vue, React</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

