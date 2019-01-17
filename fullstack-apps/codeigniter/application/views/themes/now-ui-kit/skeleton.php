<!DOCTYPE html>
<html lang="en">
 <head>

  <meta charset="utf-8"/>
  <link href="https://www.now-ui-kit.appseed.us/assets/css/apple-icon.png" rel="apple-touch-icon" sizes="76x76"/>
  <link href="https://www.now-ui-kit.appseed.us/assets/css/favicon.png" rel="icon" type="image/png"/>
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>

  <title><?php echo _assets('HEADER_TITLE') ?></title>
  <meta name="description" content="<?php echo _assets('HEADER_DESCRIPTION') ?>">
  <meta name="keywords"    content="<?php echo _assets('HEADER_KEYWORDS') ?>">

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport"/>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>

  <link href="https://www.now-ui-kit.appseed.us/assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://www.now-ui-kit.appseed.us/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet"/>
  <link href="https://www.now-ui-kit.appseed.us/assets/css/demo.css" rel="stylesheet"/>

 </head>
 <body class="landing-page sidebar-collapse">

    <?php $this->load->view( 'themes/'. _theme() . '/navigation'); ?>

    <div class="wrapper">

        <?php echo $content; ?>

        <?php $this->load->view( 'themes/'. _theme() . '/footer'); ?>

    </div>

  <script src="https://www.now-ui-kit.appseed.us/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/popper.min.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap-switch.js"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/nouislider.min.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="https://www.now-ui-kit.appseed.us/assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>

 </body>
</html>
