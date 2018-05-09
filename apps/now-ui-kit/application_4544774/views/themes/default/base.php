<!doctype html>
<html lang="en">

<head>

    <!-- Theme header -->
    <?php $this->load->view( 'themes/'. $theme . '/header'); ?>

</head>

<body class="<?php 
                    if ( $page == 'components') 
                    { 
                        echo 'index'; 
                    } else 
                    if ( $page == 'index') 
                    { 
                        echo 'landing'; 
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

        <?php $this->load->view( 'themes/'. $theme . '/footer' ); ?>

    </div>

</body>

	<!-- Footer resources -->
	<?php $this->load->view( 'themes/'. $theme . '/footer_res' ); ?>

</html>
