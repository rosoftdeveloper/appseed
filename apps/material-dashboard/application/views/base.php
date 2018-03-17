<!doctype html>
<html lang="en">
<head>

	<!-- Theme header -->
    <?php $this->load->view( '/header'); ?>

</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="/static/<?php echo 'themes/' . $theme; ?>/assets/img/sidebar-1.jpg">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
            Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">

                <?php $this->load->view( '/sidebar'); ?>
            
            </div>
        </div>
        <div class="main-panel">
            <?php 
                if(logged_in()) {  
                
                    //$this->load->view( 'common/edit_panel' );
                } 
            ?>        
            <nav class="navbar navbar-transparent navbar-absolute">

                <?php $this->load->view( '/navbar'); ?>

            </nav>
            <div id="appseed_editable" class="content">

                <?php echo $content; ?>
                
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Designed by <a href="http://www.creative-tim.com">Creative Tim</a> Coded by <a href="https://www.appseed.us">AppSeed</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>

	<!-- Theme header -->
    <?php $this->load->view( '/footer'); ?>

</html>