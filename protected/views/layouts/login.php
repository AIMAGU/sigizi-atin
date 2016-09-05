<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>SIGIZI-Login page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style_responsive.css" rel="stylesheet" />
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/img/logo.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>
	<?php echo $content; ?>
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2016 &copy; Sistem Menu Gizi Penderita Diabetes
  </div>
  <!-- END COPYRIGHT -->
</body>
<!-- END BODY -->
</html>