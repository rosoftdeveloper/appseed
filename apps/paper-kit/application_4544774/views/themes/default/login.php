
    <div class="wrapper">
        <div class="page-header" style="background-image: url('/static/themes/<?php echo $theme; ?>/assets/img/login-image.jpg');">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 ml-auto mr-auto">
                            <div class="card card-register">

                                <h3 class="title">Sign in</h3>

                                <?php if ( has_text( $message ) ) { ?>

                                    <h5><?php echo $message; ?></h5>


                                <?php } else { ?>

                                    <?php if ( has_text( $error ) ) { ?>
                                        <h5><?php echo $error; ?></h5>
                                    <?php } ?>

                                    <div class="social-line text-center">
                                        <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>

                                <?php } ?>

                                <?php if ( FALSE == has_text( $message ) ) { ?>

                                    <form class="register-form" method="POST" action="/login">

                                        <label>Username</label>
                                        <input value="test" name="username" type="text" class="form-control" placeholder="Username">

                                        <label>Password</label>
                                        <input value="pass" name="password" type="password" class="form-control" placeholder="Password">

                                        <button class="btn btn-danger btn-block btn-round">Submit</button>
                                    </form>
                                    <div class="forgot">
                                        <a href="<?php echo base_url('register'); ?>" class="btn btn-link btn-warn">Register</a>
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url(); ?>" class="btn btn-link btn-warn">Home</a>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
					<div class="footer register-footer text-center">
						<h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
					</div>
                </div>
        </div>
    </div>
