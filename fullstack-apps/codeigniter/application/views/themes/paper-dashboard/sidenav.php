
<div class="sidebar" data-background-color="white" data-active-color="danger">

<div class="sidebar-wrapper">
    <div class="logo">
        <a target="_blank" href="https://www.appseed.us/fullstack-apps-generator" class="simple-text">
            Full Stack App
        </a>
    </div>

    <ul class="nav">
        <li class="<?php echo ( $page == 'index' ? 'active' : '' ) ?>">
            <a href="/">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="<?php echo ( $page == 'user' ? 'active' : '' ) ?>">
            <a href="/user">
                <i class="ti-user"></i>
                <p>User Profile</p>
            </a>
        </li>
        <li class="<?php echo ( $page == 'table' ? 'active' : '' ) ?>">
            <a href="/table">
                <i class="ti-view-list-alt"></i>
                <p>Table List</p>
            </a>
        </li>
        <li class="<?php echo ( $page == 'typography' ? 'active' : '' ) ?>">
            <a href="/typography">
                <i class="ti-text"></i>
                <p>Typography</p>
            </a>
        </li>
        <li class="<?php echo ( $page == 'icons' ? 'active' : '' ) ?>">
            <a href="/icons">
                <i class="ti-pencil-alt2"></i>
                <p>Icons</p>
            </a>
        </li>
        <li class="<?php echo ( $page == 'notifications' ? 'active' : '' ) ?>">
            <a href="/notifications">
                <i class="ti-bell"></i>
                <p>Notifications</p>
            </a>
        </li>

        <?php if ( _is_auth() ) { ?>

        <li>
            <a href="/logout">
                <i class="ti-user"></i>
                <p>Logout</p>
            </a>
        </li>

        <?php } else { ?>    

        <li>
            <a href="/login">
                <i class="ti-user"></i>
                <p>Login</p>
            </a>
        </li>

        <?php } ?>

        <li class="active-pro">
            <a target="_blank" href="<?php echo _assets('LINK_APP_GENERATOR') ?>">
                <p>Get this app in Vue, React</p>
            </a>
        </li>
        
    </ul>
</div>
</div>

