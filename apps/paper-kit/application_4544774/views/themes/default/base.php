<!doctype html>
<html lang="en">
<head>

    <!-- Theme header -->
    <?php $this->load->view( 'themes/'. $theme . '/header'); ?>

    <!-- Facebook plugin -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1645406262417249";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>    
	<!-- Facebook plugin END -->
	
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

