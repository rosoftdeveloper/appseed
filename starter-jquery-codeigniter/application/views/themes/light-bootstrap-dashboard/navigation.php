
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">

                    <a target="_blank" class="navbar-brand" href="https://github.com/rosoftdeveloper/appseed/tree/master/fullstack-apps/">Sources</a>
                    &nbsp;&nbsp; 
                    <a target="_blank" class="navbar-brand" href="https://www.facebook.com/groups/fullstack.apps.generator/">Support</a>

                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                        <?php if ( _is_auth() ) { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="nc-icon nc-circle-09"></i>
                                    &nbsp; <?php echo _identity(); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('logout') ?>">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>

                        <?php } else { ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('login') ?>">
                                    <span class="no-icon">Sign in</span>
                                </a>
                            </li>

                        <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
