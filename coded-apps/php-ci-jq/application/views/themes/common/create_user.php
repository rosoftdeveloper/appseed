
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 text-center">
								<a href="#" class="active" id="login-form-link">Register</a>
							</div>
							<div class="col-xs-12 text-center">
                                <div class='text-danger' id="infoMessage"><?php echo $message;?></div>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">

								<?php echo form_open("auth/create_user");?>

									<div class="form-group">
										<?php 
											$first_name[ 'class'       ] = 'form-control';
											$first_name[ 'placeholder' ] = 'First Name';
											echo form_input( $first_name ); ?>
                                    </div>
									<div class="form-group">
										<?php 
											$last_name[ 'class'       ] = 'form-control';
											$last_name[ 'placeholder' ] = 'Last Name';
											echo form_input( $last_name ); ?>
                                    </div>
									<div class="form-group">
										<?php 
											$email[ 'class'       ] = 'form-control';
											$email[ 'placeholder' ] = 'eMail';
											echo form_input( $email ); ?>                    
                                    </div>
									<div class="form-group">
										<?php 
											$password[ 'class'       ] = 'form-control';
											$password[ 'placeholder' ] = 'Password';
											echo form_input($password);?>
                                    </div>
									<div class="form-group">
										<?php 
											$password_confirm[ 'class'       ] = 'form-control';
											$password_confirm[ 'placeholder' ] = 'Password Confirm';
											echo form_input($password_confirm);?>
                                    </div>
                                    
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Register">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
                                                    <a href="href="<?php echo base_url() ?>"" tabindex="5" class="forgot-password">Home</a>
                                                    &nbsp;&nbsp;
													<a href="<?php echo base_url('auth/login') ?>" tabindex="5" class="forgot-password">Login</a>
												</div>
											</div>
										</div>
									</div>
                                
                                    <?php echo form_close();?>

							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        