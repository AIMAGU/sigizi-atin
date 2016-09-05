<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="keyword" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style.css" rel="stylesheet" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/css/style_default.css" rel="stylesheet" id="style_color" />

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/assets/uniform/css/uniform.default.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/img/logo.png" alt="" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo Yii::app()->request->baseUrl; ?>/site-pengaturan" data-original-title="Settings">
                               <i class="icon-cog"></i> 
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                    </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="<?php echo Yii::app()->request->baseUrl; ?>/site/beranda" data-original-title="Help">
                               <i class="icon-home"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="<?php echo Yii::app()->request->baseUrl; ?>/aimagu-theme/img/avatar-mini.png" alt="">
                               <span class="username"><?= Yii::app()->user->name; ?></span>
                           </a>
                           <ul class="dropdown-menu">
                               <li><?php echo CHtml::link('<i class="icon-off"></i> Logout ('.Yii::app()->user->name.')',array('site/logout')); ?></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
			<?php if(Yii::app()->user->level==3){ ?>
			<ul class="sidebar-menu">
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-star"></i></span> Konsultasi',array('gejala/index')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-list-alt"></i></span> Artikel',array('artikel/index')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-comment"></i></span> Tanya Jawab',array('tanya/index')); ?></li>
			</ul>
			<?php }else if(Yii::app()->user->level==1){ ?>
			<ul class="sidebar-menu">
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-user"></i></span> Manage User',array('user/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-tasks"></i></span> Menu Makanan',array('menu/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-star"></i></span> Gejala',array('gejala/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-th-large"></i></span> Riwayat',array('riwayat/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-list-alt"></i></span> Artikel',array('artikel/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-comment"></i></span> Tanya Jawab',array('tanya/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-file"></i></span> Laporan',array('grafik/admin')); ?></li>
				
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-share"></i></span> Data Identifikasi',array('gejalaatin/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-share"></i></span> Diagnosa',array('diagnosaatin/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-share"></i></span> Konsultasi',array('konsultasiatin/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-share"></i></span> Konsul Detail',array('konsultasidetailatin/admin')); ?></li>
				<li><?php echo CHtml::link('<span class="icon-box"><i class="icon-share"></i></span> Pengetahuan',array('pengetahuanatin/admin')); ?></li>
			</ul>
			<?php } ?>
			<!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<!--<h3 class="page-title">
						Judul
						<small>Sub Judul</small>
					</h3>-->
					<ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-star-empty"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Sistem Menu Gizi Penderita Diabetes</a> <span class="divider-last">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
				<?php echo $content; ?>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2016 &copy; Sistem Menu Gizi Penderita Diabetes. <i>Powered By: Prihatin Susilowati</i>
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
</body>
<!-- END BODY -->
</html>