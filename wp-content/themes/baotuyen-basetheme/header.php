<?php /* * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. */ ?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="content-language" content="vi">
        <meta name="revisit-after" content="1 days">
        <meta name="robots" content="noodp,index,follow">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/logo 1 - Copy (2)(1).png" type="image/x-icon" />
        <title>Thi công biển quảng cáo, đèn Led, Chữ đồng, Inox, Quảng Cáo Quan Sơn</title>

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/main.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.js"></script>
        <?php wp_head(); ?>
    </head>
    <body >
        <div class="container">
            <header id="header">
                <img class="banner" src="<?php echo get_template_directory_uri()?>/img/banner.jpg">
                <div class="top-header">
                   
<!--                    <div id="logo">
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg">
                        </a>
                    </div>
                    <div class="wrap_logo" >
                        <div class="slogan">Công ty TNHH quảng cáo và phát triển công nghệ Đức Phát</div>
                        <div id="hotline_top">
                            <p><?php echo get_field('phone', PAGE_HOME) ?></p>
                        </div>
   
                    </div>-->
                    <div class="clear"></div>
                </div>
                <div class="togger-menu"><span>&nbsp;</span> <i class="fa fa-bars" aria-hidden="true"></i></div>
                <div id="menu-primary" id="menu">
                    <div id="navbar">
                        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => "menu_top", 'menu_class' => 'nav-menu clearfix')); ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </header>



