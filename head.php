<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php
		if(is_home()) {
			echo bloginfo('name');
		}elseif(is_category()) {
			echo bloginfo('name').'-';
		wp_title(' ', true, '');
		}elseif(is_archive()){
			echo bloginfo('name').'-';
		wp_title(' ', true, '');
		}elseif(is_search()) {
			echo bloginfo('name').'-' . $s;
		}elseif(is_404()) {
			echo '404 - ' . bloginfo('name');
		}else {
		bloginfo('name'); wp_title('-', true, '');
		}?></title>
    
      <meta charset="UTF-8"/>
      <meta content='width=1280' name='viewport'/> 
      <meta content='all' name='audience'/>
      <meta content='general' name='rating'/> 
      <meta content='raqameyyah' name='author'/> 
      <meta content='chrome=1' http-equiv='X-UA-Compatible'/> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
     	<!-- CSS start here -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/mix.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" />
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/./img/raqameyyah.png">
     <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'/>
	<!-- CSS end here -->
	<!-- Google fonts start here -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'/>
	<!-- Google fonts end here -->
    </head>
    <body>
 <header>
    <div class="top">
        <div class="container">
    <div class="row">
<div class="email">
            <h3>info@raqameyyah.co</h3> 
            </div>
        <div class="col-sm-6">
        <ul class="social list-unstyled list-inline">
             <li><a href=""><span class="fa fa-facebook"></span></a></li>
           <li><a href=""><span class="fa fa-twitter"></span></a></li>
                  <li><a href=""><span class="fa fa-youtube"></span></a></li>
           </ul>
        </div>
        </div>
    </div>
    </div>  
      <div class="Info">
          <div class="container">
         <div class="phone">
           <div class="info-tele">
            <h3>(970) 59 767 6047</h3>
                 <p>خدمة 24 ساعة</p>
           </div>
         </div>
        </div>
</div>
      
      <nav>
            <div class="container">
               <div class="logo">
                  <a href="<?php bloginfo('home'); ?>" class="logo">
                     <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="RAQAMEYYAH" width="120" class="mainLogo">
                  </a>
               </div>

               <div id="navbar-main">
                    <a class="open-menu"><i class="fa fa-bars"></i></a>
                  <ul class="nav navbar-nav navbar-left">
                     <li><a href="<?php bloginfo('home'); ?>">الرئيسية</a></li>
                     <li><a href="#about">عن رقمية</a></li>
                     <li><a href="#services">الخدمات</a></li>
                     <li><a href="#">الفريق</a></li>
                     <li><a href="#blog">المدونة</a></li>
                     <li><a href="#contact">إتصل بنا</a></li>
                  </ul>
               </div>
            </div>
         </nav>
        </header>