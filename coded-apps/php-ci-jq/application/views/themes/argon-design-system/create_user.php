
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
                    <?php echo lang('create_user_subheading');?>
                  </small>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>
                    <div class='text-danger' id="infoMessage"><?php echo $message;?></div>
                  </small>
                </div>
                
                <?php echo form_open("auth/create_user");?>

                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <?php 
                            $first_name[ 'class'       ] = 'form-control';
                            $first_name[ 'placeholder' ] = 'First Name';
                            echo form_input( $first_name ); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div>
                      <?php 
                            $last_name[ 'class'       ] = 'form-control';
                            $last_name[ 'placeholder' ] = 'Last Name';
                            echo form_input( $last_name ); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <?php 
                            $email[ 'class'       ] = 'form-control';
                            $email[ 'placeholder' ] = 'eMail';
                            echo form_input( $email ); ?>                    
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
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <?php 
                            $password_confirm[ 'class'       ] = 'form-control';
                            $password_confirm[ 'placeholder' ] = 'Password Confirm';
                            echo form_input($password_confirm);?>
                    </div>
                  </div>
                  <div class="text-muted font-italic">
                    <small>Password min-lenght: 
                      <span class="text-success font-weight-700">
                          6 characters
                      </span>
                    </small>
                  </div>
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                        <label class="custom-control-label" for="customCheckRegister">
                          <span>I agree with the
                            <a href="#">Privacy Policy</a>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                  </div>

                <?php echo form_close();?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
