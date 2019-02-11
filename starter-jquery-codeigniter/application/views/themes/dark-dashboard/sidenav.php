
<div class="sidebar">

<div class="sidebar-wrapper">
  <div class="logo text-center">
    <a target="_blank" href="<?php echo _assets('GENERATOR') ?>" class="simple-text logo-normal">
      Full Stack App
    </a>
  </div>
  <ul class="nav">

  <li class="<?php echo ( $page == 'index' ? 'active' : '' ) ?>">
      <a href="/">
        <i class="tim-icons icon-chart-pie-36"></i>
        <p>Dashboard</p>
      </a>
    </li>

  <li class="<?php echo ( $page == 'icons' ? 'active' : '' ) ?>">
      <a href="/icons">
        <i class="tim-icons icon-atom"></i>
        <p>Icons</p>
      </a>
    </li>

    <li class="<?php echo ( $page == 'notifications' ? 'active' : '' ) ?>">
      <a href="/notifications">
        <i class="tim-icons icon-bell-55"></i>
        <p>Notifications</p>
      </a>
    </li>

    <li class="<?php echo ( $page == 'user' ? 'active' : '' ) ?>">
      <a href="/user">
        <i class="tim-icons icon-single-02"></i>
        <p>User Profile</p>
      </a>
    </li>

    <li class="<?php echo ( $page == 'tables' ? 'active' : '' ) ?>">
      <a href="/tables">
        <i class="tim-icons icon-puzzle-10"></i>
        <p>Table List</p>
      </a>
    </li>

    <li class="<?php echo ( $page == 'typography' ? 'active' : '' ) ?>">
      <a href="typography">
        <i class="tim-icons icon-align-center"></i>
        <p>Typography</p>
      </a>
    </li>

    <?php if ( _is_auth() ) { ?>

      <li>
          <a class="nav-link" href="<?php echo base_url('logout'); ?>">
              <i class="tim-icons icon-button-power"></i>
              <p>Logout</p>
          </a>
      </li>

    <?php } else { ?>

      <li>
          <a class="nav-link" href="<?php echo base_url('login'); ?>">
              <i class="tim-icons icon-button-power"></i>
              <p>Login</p>
          </a>
      </li>

    <?php } ?>
    
</ul>
</div>
</div>


