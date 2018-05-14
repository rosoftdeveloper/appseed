<!doctype html>
<html lang="en">
<head>

    <!-- Theme header -->
    <?php $this->load->view( 'themes/'. $theme . '/header'); ?>

</head>
<body>

	<!-- nav bar -->
    <?php $this->load->view( 'themes/'. $theme . '/nav_bar'); ?>

	<!-- content -->
    <?php echo $content; ?>

	<!-- Footer resources -->
	<?php $this->load->view( 'themes/'. $theme . '/footer' ); ?>
	
</body>

	<!-- Footer resources -->
	<?php $this->load->view( 'themes/'. $theme . '/footer_res' ); ?>

</html>

