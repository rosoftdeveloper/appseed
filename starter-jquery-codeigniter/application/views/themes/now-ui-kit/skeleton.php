<!DOCTYPE html>
<html lang="en">
 <head>

    <?php $this->load->view( 'themes/'. _theme() . '/header');  ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134527721-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134527721-1');
</script>

 </head>
 <body class="landing-page sidebar-collapse">

    <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

    <div class="wrapper">

        <?php echo $content; ?>

        <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

    </div>

  <script src="/<?php echo _static() ?>assets/js/jquery.min.js"           type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/popper.min.js"           type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/bootstrap.min.js"        type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/bootstrap-switch.js"     type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/nouislider.min.js"       type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/now-ui-kit.js?v=1.2.0"   type="text/javascript"></script>

 </body>
</html>
