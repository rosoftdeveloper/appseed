
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <div class="text-muted text-center mb-3">
                  <small>
                    <?php echo lang('login_subheading');?>
                  </small>
                </div>
            </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                    <small>
                        <div class='text-danger' id="infoMessage"><?php echo $message;?></div>
                    </small>
                </div>

                <?php echo form_open("auth/login");?>    

                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <?php 
                            $identity[ 'class'       ] = 'form-control';
                            $identity[ 'placeholder' ] = 'Identity';
                            echo form_input( $identity ); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      
                      <?php 
                            $password[ 'class'       ] = 'form-control';
                            $password[ 'placeholder' ] = 'Password';
                            echo form_input($password);?>
                    </div>
                  </div>

                  <!--
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for="customCheckLogin">
                      <span>Remember me</span>
                    </label>
                  </div>-->

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                  </div>
                
                <?php echo form_close();?>

              </div>
            </div>
            <div class="row mt-3">
              <div class="col-6">
                <a href="<?php echo base_url() ?>" class="text-light">
                  <small>Home</small>
                </a>
              </div>
              <div class="col-6 text-right">
                <a href="<?php echo base_url('auth/create_user') ?>" class="text-light">
                  <small>Create new account</small>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
