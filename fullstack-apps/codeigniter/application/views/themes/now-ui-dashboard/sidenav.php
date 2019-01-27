
<div class="sidebar" data-color="orange">

<div class="logo">
  <a target="_blank" href="https://www.appseed.us/fullstack-apps-generator" class="simple-text logo-normal">
    Full Stack App
  </a>
</div>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="<?php echo ( $page == 'index' ? 'active' : '' ) ?>">
      <a href="/">
        <i class="now-ui-icons design_app"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="<?php echo ( $page == 'icons' ? 'active' : '' ) ?>">
      <a href="./icons">
        <i class="now-ui-icons education_atom"></i>
        <p>Icons</p>
      </a>
    </li>
    <li class="<?php echo ( $page == 'notifications' ? 'active' : '' ) ?>">
      <a href="./notifications">
        <i class="now-ui-icons ui-1_bell-53"></i>
        <p>Notifications</p>
      </a>
    </li>
    <li class="<?php echo ( $page == 'user' ? 'active' : '' ) ?>">
      <a href="./user">
        <i class="now-ui-icons users_single-02"></i>
        <p>User Profile</p>
      </a>
    </li>
    <li class="<?php echo ( $page == 'tables' ? 'active' : '' ) ?>">
      <a href="./tables">
        <i class="now-ui-icons design_bullet-list-67"></i>
        <p>Table List</p>
      </a>
    </li>
    <li class="<?php echo ( $page == 'typography' ? 'active' : '' ) ?>">
      <a href="./typography">
        <i class="now-ui-icons text_caps-small"></i>
        <p>Typography</p>
      </a>
    </li>

    <?php if ( _is_auth() ) { ?>

    <li>
      <a href="/logout">
        <i class="now-ui-icons users_single-02"></i>
        <p>Logout</p>
      </a>
    </li>

    <?php } else { ?>    

    <li>
      <a href="/login">
        <i class="now-ui-icons users_single-02"></i>
        <p>Login</p>
      </a>
    </li>

    <?php } ?>

    <li class="active-pro">
      <a target="_blank" href="<?php echo _assets('LINK_APP_GENERATOR') ?>">
        <i class="now-ui-icons arrows-1_cloud-download-93"></i>
        <p>Get this app in Vue, React</p>
      </a>
    </li>

  </ul>
</div>
</div>

