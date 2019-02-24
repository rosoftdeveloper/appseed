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

<body class="<?php if ( $page == 'index' ) echo 'landing';
                    else echo $page; 
            ?>-page sidebar-collapse">

    <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

    <?php echo $content; ?>

    <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

  <!--   Core JS Files   -->
  <script src="/<?php echo _static() ?>assets/js/core/jquery.min.js"                    type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/core/popper.min.js"                    type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/plugins/moment.min.js"></script>
  <script src="/<?php echo _static() ?>assets/js/plugins/bootstrap-datetimepicker.js"   type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/plugins/nouislider.min.js"             type="text/javascript"></script>
  <script src="/<?php echo _static() ?>assets/js/material-kit.js?v=2.0.5"               type="text/javascript"></script>

</body>

</html>