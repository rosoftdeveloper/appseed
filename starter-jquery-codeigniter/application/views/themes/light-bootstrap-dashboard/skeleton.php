<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view( 'themes/'. _theme() . '/header');  ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134565367-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134565367-1');
</script>
    
</head>

<body>
    <div class="wrapper">

        <?php $this->load->view( 'themes/'. _theme() . '/sidenav'); ?>
      
        <div class="main-panel">

            <!-- Navbar -->
            <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

            <!-- End Navbar -->
            <div class="content">

            <?php echo $content; ?>

            </div>

            <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="/<?php echo _static() ?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/<?php echo _static() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/<?php echo _static() ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/<?php echo _static() ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="/<?php echo _static() ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/<?php echo _static() ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="/<?php echo _static() ?>assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="/<?php echo _static() ?>assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>