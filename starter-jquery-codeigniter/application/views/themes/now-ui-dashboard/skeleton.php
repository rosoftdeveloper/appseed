<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view( 'themes/'. _theme() . '/header'); ?>

  <?php echo _analytics() ?>
  
</head>

<body class="">
  <div class="wrapper ">
    
    <?php $this->load->view( 'themes/'. _theme() . '/sidenav'); ?>

    <div class="main-panel">

      <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

      <?php if ( $page == 'index' ) { ?>
        <div class="panel-header panel-header-lg">
          <canvas id="bigDashboardChart"></canvas>
        </div>
      <?php } else { ?>
        <div class="panel-header panel-header-sm">
        </div>
      <?php } ?>

      <div class="content">

      <?php echo $content; ?>

      </div>

      <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/<?php echo _static() ?>assets/js/core/jquery.min.js"></script>
  <script src="/<?php echo _static() ?>assets/js/core/popper.min.js"></script>
  <script src="/<?php echo _static() ?>assets/js/core/bootstrap.min.js"></script>
  <script src="/<?php echo _static() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="/<?php echo _static() ?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/<?php echo _static() ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/<?php echo _static() ?>assets/js/now-ui-dashboard.min.js?v=1.2.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="/<?php echo _static() ?>assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
