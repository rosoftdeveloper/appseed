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

<body class="<?php 
                    if ( $page == 'components') 
                    { 
                        echo 'index'; 
                    } else 
                    if ( $page == 'index') 
                    { 
                        echo 'landing'; 

                    } else 
                    if ( $page == 'register') 
                    { 
                        echo 'signup';

                    } else {
                        echo $page;
                    } 
                ?>-page sidebar-collapse">

    <?php 
        $this->load->view( 'themes/'. $theme . '/nav_bar');
    ?>
    
    <div class="wrapper">

        <?php 
            echo $content; 
        ?>

        <?php 

            //if ( ($page !== 'login') || ($page !== 'register') ) {

                $this->load->view( 'themes/'. $theme . '/footer' ); 

            //}

        ?>

    </div>

</body>

	<!-- Footer resources -->
	<?php $this->load->view( 'themes/'. $theme . '/footer_res' ); ?>

</html>
