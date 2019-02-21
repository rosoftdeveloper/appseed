<!DOCTYPE html>
<html>

<head>

  <?php $this->load->view( 'themes/'. _theme() . '/header');  ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104843706-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-104843706-1');
</script>

</head>

<body>

  <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

  <main>
    
    <?php echo $content; ?>
    
  </main>

  <?php $this->load->view( 'themes/'. _theme() . '/footer');  ?>

  <!-- Core -->
  <script src="/<?php echo _static() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="/<?php echo _static() ?>assets/vendor/popper/popper.min.js"></script>
  <script src="/<?php echo _static() ?>assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="/<?php echo _static() ?>assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="/<?php echo _static() ?>assets/js/argon.js?v=1.0.1"></script>

</body>

</html>
