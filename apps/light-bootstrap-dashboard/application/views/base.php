<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $assets->HEADER_TITLE; ?></title>
    <meta name="description" content="<?php echo $assets->HEADER_INFO; ?>">
    <meta name="keywords"    content="<?php echo $assets->HEADER_KEYWORDS; ?>">

    <?php $this->load->view('common/header'); ?>

</head>

<body class="">

    <div class="wrapper">

        <?php $this->load->view('common/sidebar'); ?>
        
        <div class="main-panel">

            <?php echo $content; ?>

            <?php $this->load->view('common/footer'); ?>

        </div>

    </div>
</body>

    <?php $this->load->view('common/footer_res'); ?>

    <script>
        $(document).ready(function() {

            <?php if ( 'dashboard' === $segment ) { ?>

                // Javascript method's body can be found in assets/js/demos.js
                demo.initDashboardPageCharts();
                demo.showNotification();

            <?php } ?>
        
        });
    </script>
    
</html>
