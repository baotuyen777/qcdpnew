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

        <!--    <base href="http://quangcaoquanson.com/">
            <link rel="canonical" href="http://quangcaoquanson.com/">-->
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet" />


        <link href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.js"></script>
        <?php wp_head(); ?>
    </head>
    <body >
        <div class="container">
            <div id="header">
                <div class="row">
                    <div class="col-sm-2">
                        <div id="logo">
                            <a href="<?php echo home_url() ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="slogan">Công ty TNHH quảng cáo và phát triển công nghệ Đức Phát</div>
                    </div>
                    <div class="col-sm-4">
                        <div id="hotline_top">
                            <p>Điện thoại</p>
                            <p><?php echo get_field('phone', PAGE_HOME) ?></p>
                        </div>
                        <div id="search">
                            <form  >
                                <div class="search1">
                                    <input type="text" name="s" id="ten" placeholder="nhập từ khóa">
                                </div>
                                <div class="search2">
                                    <input type="submit" name="submit" value="">
                                </div>
                                <div class="clear"></div>
                            </form>

                        </div>
                    </div>

                    <div class="togger-menu"><span>Menu</span> <i class="fa fa-list"></i>
                    </div>
                    <div id="menu-primary" id="menu">
                        <div id="navbar">
                            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => "menu_top", 'menu_class' => 'nav-menu clearfix')); ?>
                        </div>
                    </div>
                </div>
            </div>



            