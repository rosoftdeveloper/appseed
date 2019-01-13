
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 text-center">
								<a href="#" class="active" id="login-form-link">Login</a>
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

                                <?php echo form_open("auth/login");?>
									<div class="form-group">
                                        <?php 
                                            $identity[ 'class'       ] = 'form-control';
                                            $identity[ 'placeholder' ] = 'eMail';
                                            echo form_input( $identity ); ?>
                                    </div>
									<div class="form-group">
                                        <?php 
                                            $password[ 'class'       ] = 'form-control';
                                            $password[ 'placeholder' ] = 'Password';
                                            echo form_input($password);?>
                                    </div>

                                    <!--
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
                                    </div>-->
                                    
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
                                                    <a href="<?php echo base_url() ?>" tabindex="5" class="forgot-password">Home</a>
                                                    &nbsp;&nbsp;
													<a href="<?php echo base_url('register') ?>" tabindex="5" class="forgot-password">Register</a>
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
        