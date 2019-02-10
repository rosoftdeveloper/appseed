<!doctype html>
<html lang="en">
<head>

    <?php $this->load->view( 'themes/'. _theme() . '/header'); ?>

    <?php echo _analytics() ?>

</head>
<body>

<div class="wrapper">

    <?php $this->load->view( 'themes/'. _theme() . '/sidenav'); ?>

    <div class="main-panel">

        <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

        <?php echo $content; ?>

        <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

    </div>
</div>

</body>

    <script src="/<?php echo _static() ?>assets/js/jquery.min.js"               type="text/javascript"></script>
	<script src="/<?php echo _static() ?>assets/js/bootstrap.min.js"            type="text/javascript"></script>
	<script src="/<?php echo _static() ?>assets/js/bootstrap-checkbox-radio.js" type="text/javascript"></script>
	<script src="/<?php echo _static() ?>assets/js/chartist.min.js"             type="text/javascript"></script>
    <script src="/<?php echo _static() ?>assets/js/bootstrap-notify.js"         type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js"                       type="text/javascript"></script>
	<script src="/<?php echo _static() ?>assets/js/paper-dashboard.js"          type="text/javascript"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="/<?php echo _static() ?>assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
