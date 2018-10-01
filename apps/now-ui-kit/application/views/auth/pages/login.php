<div id="login">
	
	<h2>Login</h2>
	<div class="box">
			<?php echo form_open(); ?>
			Username/Email:<br />
			<input readonly type="text" name="username" value="appseed" size="50" class="form" /><?php echo form_error('username'); ?><br /><br />
			Password:<br />
			<input readonly type="password" name="password" value="_Pass1234" size="50" class="form" /><?php echo form_error('password'); ?><br /><br />
			<input type="submit" value="Login" name="login" />
			</form>
	</div>
</div>