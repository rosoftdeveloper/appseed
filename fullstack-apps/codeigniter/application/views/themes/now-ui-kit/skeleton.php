<!DOCTYPE html>
<html lang="en">
 <head>

    <?php $this->load->view( 'themes/'. _theme() . '/header');  ?>

    <?php echo _analytics() ?>

 </head>
 <body class="landing-page sidebar-collapse">

    <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

    <div class="wrapper">

        <?php echo $content; ?>

        <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

    </div>

  <script src="https://www.now-ui-kit.appseed.us/assets/js/jquery.min.js"           type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/popper.min.js"           type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap.min.js"        type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap-switch.js"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/nouislider.min.js"       type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/now-ui-kit.js?v=1.2.0"   type="text/javascript"></script>

 </body>
</html>
