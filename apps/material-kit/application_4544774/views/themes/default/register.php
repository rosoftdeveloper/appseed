
            

    <div class="page-header header-filter" filter-color="purple" style="background-image: url('/static/themes/<?php echo $theme; ?>/assets/img/kit/free/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Register</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-rose">
                                            <i class="material-icons">timeline</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Marketing</h4>
                                            <p class="description">
                                                We've created the marketing campaign of the website. It was a very interesting collaboration.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-primary">
                                            <i class="material-icons">code</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Fully Coded in HTML5</h4>
                                            <p class="description">
                                                We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-info">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Built Audience</h4>
                                            <p class="description">
                                                There is also a Fully Customizable CMS Admin Dashboard for this product.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <div class="social text-center">

                                        <?php if ( has_text( $message ) ) { ?>

                                            <h5><?php echo $message; ?></h5>

                                            <button class="btn btn-link btn-info">
                                                <a href="<?php echo base_url('login'); ?>">Go to Login</a>
                                            </button>

                                        <?php } else { ?>

                                            <?php if ( has_text( $error ) ) { ?>
                                                <h5><?php echo $error; ?></h5>
                                            <?php } ?>

                                        <?php } ?>

                                    </div>

                                    <?php if ( FALSE == has_text( $message ) ) { ?>

                                    <form class="form" method="POST" action="/register">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input name="username" type="text" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">mail</i>
                                                    </span>
                                                </div>
                                                <input name="email" type="text" class="form-control" placeholder="eMail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input name="password" type="password" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input name="password_conf" type="password" placeholder="Password confirmation" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-primary btn-simple btn-round" type="submit">Submit</button>
                                            <br />            
                                            <button class="btn btn-link btn-info">
                                                <a href="<?php echo base_url('login'); ?>">Login</a> 
                                                &nbsp;&nbsp;
                                                <a href="<?php echo base_url(); ?>">Home</a> 
                                            </button>
                                        </div>
                                    </form>

                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
