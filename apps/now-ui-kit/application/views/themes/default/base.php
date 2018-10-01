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

    <!-- Google  Analitics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-104843706-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Google  Analitics END -->

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
