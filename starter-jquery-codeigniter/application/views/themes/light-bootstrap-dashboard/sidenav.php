
        <div class="sidebar" data-image="/<?php echo _static() ?>assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url(); ?>">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('user'); ?>">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('table'); ?>">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('typography'); ?>">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('icons'); ?>">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('notifications'); ?>">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>

                    <?php if ( _is_auth() ) { ?>

                        <li>
                            <a class="nav-link" href="<?php echo base_url('logout'); ?>">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                    <?php } else { ?>

                        <li>
                            <a class="nav-link" href="<?php echo base_url('login'); ?>">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>Login</p>
                            </a>
                        </li>

                    <?php } ?>

                    <li class="nav-item active active-pro">
                        <a target="_blank" class="nav-link active" href="<?php echo _assets('LINK_APP_GENERATOR') ?>">
                            <p>Get this app in Vue, React</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

