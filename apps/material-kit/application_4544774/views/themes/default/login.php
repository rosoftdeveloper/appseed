        <div class="section section-signup page-header" style="background-image: url('/static/themes/<?php echo $theme; ?>/assets/img/kit/free/city.jpg');"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="card card-signup">

                            <form class="form" method="POST" action="/login">
                        
                                <div class="card-header card-header-primary text-center">
                                    <h4>Login</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-link btn-just-icon">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-link btn-just-icon">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="text-divider"></p>
                                <div class="card-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input name="username" type="text" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                        
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-simple btn-round" type="submit">Submit</button>
                                    <br />            
                                    <button class="btn btn-link btn-info">
                                        <a href="<?php echo base_url('register'); ?>">Register</a> 
                                        &nbsp;&nbsp;
                                        <a href="<?php echo base_url(); ?>">Home</a> 
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        