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
    <link rel="icon" href="upload/files/logo 1 - Copy (2)(1).png" type="image/x-icon" />
    <title>Thi công biển quảng cáo, đèn Led, Chữ đồng, Inox, Quảng Cáo Quan Sơn</title>

    <base href="http://quangcaoquanson.com/">
    <link rel="canonical" href="http://quangcaoquanson.com/">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.jcarousel.min.js"></script>

    <link href="http://quangcaoquanson.com/skin/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="http://quangcaoquanson.com/skin/owl-carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">
    <script src="http://quangcaoquanson.com/skin/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/customs.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.jcarousel-skin-ie8').jcarousel({
                auto: 0,
                scroll: 1,
                animation: 'slow',
                wrap: 'circular',
                animation: 2000,
            });
            jQuery('.first-and-second-carousel').jcarousel({
                auto: 3,
                scroll: 1,
                animation: 'slow',
                wrap: 'circular',
                animation: 1000,
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.orbit-1.2.3.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit({
                bullets: true,
                timer: true,
                captions: true,
                animation: 'fade'
            });
        });
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=#";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php wp_head(); ?>
</head>
<!--<a target="_blank" href="http://demo1.skyvietnam.com.vn/quanson/thi-cong-bien-quang-cao" title="Trái" target="_blank">
    <img class="ads-left" src="upload/files/gree.jpg" alt="Trái">
</a>
<a target="_blank" href="http://demo1.skyvietnam.com.vn/quanson/dich-vu-in-an" title="Phải" target="_blank">
    <img class="ads-right" src="upload/files/red(1).jpg" alt="Phải">
</a>-->

<body data-base="http://quangcaoquanson.com/">
    <div class="container">
        <div id="header">
            <div class="row">
                <div class="col-sm-2">
                    <div id="logo">
                        <a href="http://quangcaoquanson.com/"><img src="upload/files/logo 1 - Copy (2)(1).png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="slogan">Công ty TNHH Thương Mại In & Quảng Cáo Quân Sơn</div>
                </div>
                <div class="col-sm-4">
                    <div id="hotline_top">
                        <p>Điện thoại</p>
                        <p>04.667.000.55 - 0912.668.653</p>
                    </div>
                    <div id="search">
                        <form name="frmsearch" method="post" action="http://quangcaoquanson.com/tim-kiem">
                            <div class="search1">
                                <input type="text" name="keyword" id="ten" value="Nhập từ khóa..." autocomplete="off" onfocus="if (this.value == 'Nhập từ khóa...')
                                                       this.value = '';" onblur="if (this.value == '')
                                                       this.value = 'Nhập từ khóa...';">
                            </div>
                            <div class="search2">
                                <input type="submit" name="submit" value="">
                            </div>
                            <div class="clear"></div>
                        </form>
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                jQuery("#search").submit(function() {
                                    if ($("#ten").val() == "" || $("#ten").val() == "Nhập từ khóa...") {
                                        alert('Bạn chưa nhập từ khóa tìm kiếm');
                                        $("#ten").focus();
                                        return false;
                                    } else {
                                        return true;
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>

                <div class="togger-menu"><span>Menu</span> <i class="fa fa-list"></i>
                </div>
                <div id="menu-primary" id="menu">
                    <div id="navbar">
                        <ul id="menu_top">
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/" title="Trang chủ">Trang chủ</a>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/gioi-thieu" title="">Giới thiệu</a>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/san-pham" title="">Sản phẩm</a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </div>
                                <ul class="sub_menu">
                                    <li><a href="http://quangcaoquanson.com/thi-cong-bien-hieu-quang-cao-dai-ly-cho-cac-thuong-hieu" title="Thi công biển hiệu quảng cáo đại lý cho các thương hiệu">Thi công biển hiệu quảng cáo đại lý cho các thương hiệu</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/cac-cong-trinh-da-hoan-thanh-2016-2017" title="CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017">CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/thi-cong-bien-quang-cao-cua-hang-showroom-cong-ty" title="Thi công biển quảng cáo cửa hàng, showroom, công ty">Thi công biển quảng cáo cửa hàng, showroom, công ty</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/dich-vu-treo-bang-ron-co-phuon-xin-giay-cap-phep" title="Dịch vụ treo băng rôn, cờ phướn, xin giấy cấp phép">Dịch vụ treo băng rôn, cờ phướn, xin giấy cấp phép</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/thi-cong-bien-quang-cao" title="">Thi công biển quảng cáo </a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </div>
                                <ul class="sub_menu">
                                    <li><a href="http://quangcaoquanson.com/bien-quang-cao-ngoai-troi" title="Biển quảng cáo ngoài trời">Biển quảng cáo ngoài trời</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-chu-dong-chu-inox" title="Biển chữ đồng, chữ INOX">Biển chữ đồng, chữ INOX</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-quang-cao-tren-xe" title="Biển quảng cáo trên xe">Biển quảng cáo trên xe</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-den-neon-sign" title=" Biển đèn Neon sign"> Biển đèn Neon sign</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-op-nhom-alu" title="Biển ốp nhôm Alu">Biển ốp nhôm Alu</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-led-ma-tran" title="Biển LED ma trận">Biển LED ma trận</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-quang-cao" title="Biển quảng cáo">Biển quảng cáo</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-chu-mica" title="Biển chữ MICA">Biển chữ MICA</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-bat-hiflex" title="Biển bạt Hiflex">Biển bạt Hiflex</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-den-led" title="Biển đèn LED">Biển đèn LED</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bang-dien-tu" title="Bảng điện tử">Bảng điện tử</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-hop-den" title=" Biển hộp đèn"> Biển hộp đèn</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-cong-ty" title="Biển công ty">Biển công ty</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-chu-noi" title="Biển chữ nổi">Biển chữ nổi</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/thiet-ke-logo-2" title=" Thiết kế logo"> Thiết kế logo</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/chu-hut-noi" title="Chữ hút nổi">Chữ hút nổi</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-vay" title="Biển vẫy">Biển vẫy</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/chu-noi-uon-gay" title="Chữ nổi uốn gáy">Chữ nổi uốn gáy</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/cat-khac-cnc" title="Cắt khắc CNC">Cắt khắc CNC</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/hop-den-sieu-mong" title="Hộp đèn siêu mỏng">Hộp đèn siêu mỏng</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/tam-op-3d-quang-cao" title="Tấm ốp 3D quảng cáo">Tấm ốp 3D quảng cáo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/dich-vu-in-an" title="">Dịch vụ in ấn</a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </div>
                                <ul class="sub_menu">
                                    <li><a href="http://quangcaoquanson.com/in-tem-vo-tem-decal" title="In tem vỡ, tem Decal">In tem vỡ, tem Decal</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-the-nhan-vien" title="In thẻ nhân viên">In thẻ nhân viên</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-an-quang-cao" title="In ấn quảng cáo">In ấn quảng cáo</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-brochure" title="In Brochure">In Brochure</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-phun-kho-lon" title="In phun khổ lớn">In phun khổ lớn</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-uv" title="In UV">In UV</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-menu" title=" In menu"> In menu</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-poster" title=" In poster"> In poster</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-profile" title=" In Profile"> In Profile</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-card-visit" title="In Card visit">In Card visit</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-catalogue" title=" In catalogue"> In catalogue</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/in-tem-bao-hanh" title="In tem bảo hành">In tem bảo hành</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/dich-vu-khac" title="">Dịch vụ khác</a>
                                <div class="togger-menu-sub"><i class="fa fa-chevron-down" aria-hidden="true"></i>
                                </div>
                                <ul class="sub_menu">
                                    <li><a href="http://quangcaoquanson.com/chu-do-keo" title="Chữ đổ keo">Chữ đổ keo</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bien-so-nha" title=" Biển số nhà"> Biển số nhà</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/dich-vu-trang-tri-noel" title=" Dịch vụ trang trí Noel"> Dịch vụ trang trí Noel</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/gian-hang-trung-bay" title="Gian hàng trưng bày">Gian hàng trưng bày</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/bao-gia-lam-bien-quang-cao" title="Báo giá làm biển quảng cáo">Báo giá làm biển quảng cáo</a>
                                    </li>
                                    <li><a href="http://quangcaoquanson.com/mo-hinh-quang-cao" title=" Mô hình quảng cáo"> Mô hình quảng cáo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/tin-tuc" title="">Tin tức</a>
                            </li>
                            <li class="li"><a class="a" href="http://quangcaoquanson.com/lien-he" title="Liên hệ">Liên hệ</a>
                            </li>
                        </ul>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#menu_top > li').hover(function() {
                                    $(this).children('.sub_menu').css('display', 'block');
                                    //$(this).children('.sub-menu').stop().show(400);
                                }, function() {
                                    $(this).children('.sub_menu').css('display', 'none');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>



        <div id="slider">
            <div style="width: none" id="featured">
                <img data-caption="#slide1" src="upload/files/Untitled-1.jpg" width="1000" height="300" />
                </a>
                <img data-caption="#slide2" src="upload/files/wqk1467888094.jpg" width="1000" height="300" />
                </a>
            </div>
            <div class="orbit-caption" id="slide1">
                <div class="slider_top">
                    <h2><a href="http://demo1.skyvietnam.com.vn/quanson/chu-inox-chu-noi">Chữ INOX</a></h2> Với công nghệ làm biển công ty chất liệu inox và biển công ty bằng đồng hiện đang là 2 loại biển quảng cáo giữ thứ hạng cao theo xếp hạng yêu cầu làm biển quảng cáo, biển tên công ty cho doanh nghiệp.
                    <div class="read">
                        <a href="http://demo1.skyvietnam.com.vn/quanson/chu-inox-chu-noi">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="orbit-caption" id="slide2">
                <div class="slider_top">
                    <h2><a href="http://demo1.skyvietnam.com.vn/quanson/den-led-trang-tri">Đèn Led trang trí</a></h2> Hiện nay có rất nhiều loại LED với đầy đủ các kích thước, hình dáng và màu sắc khác nhau, rất thích hợp dùng để trang trí. Được chế tạo từ vật liệu polyme, LED có độ bền cao, dễ vận chuyển.
                    <div class="read">
                        <a href="http://demo1.skyvietnam.com.vn/quanson/den-led-trang-tri">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vien_slider"></div>


        <div id="category">
            <div class="category_item">
                <div class="category_all">
                    <div class="category_icon">
                        <a target="_blank" href="http://quangcaoquanson.com/thi-cong-bien-hieu-quang-cao-dai-ly-cho-cac-thuong-hieu" title="Thi công biển hiệu quảng cáo đại lý cho các thương hiệu"><img src="upload/files/biển vẫy.jpg" title="Thi công biển hiệu quảng cáo đại lý cho các thương hiệu" alt="Thi công biển hiệu quảng cáo đại lý cho các thương hiệu">
                        </a>
                    </div>
                    <div class="category_noidung">
                        <h1><a href="http://quangcaoquanson.com/thi-cong-bien-hieu-quang-cao-dai-ly-cho-cac-thuong-hieu" title="Thi công biển hiệu quảng cáo đại lý cho các thương hiệu">Thi công biển hiệu quảng cáo đại lý cho các thương hiệu</a></h1>
                        <p>Dịch vụ chuy&ecirc;n nghiệp, tư vấn tận t&igrave;nh với từng&nbsp;kh&aacute;ch h&agrave;ng...</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="category_item">
                <div class="category_all">
                    <div class="category_icon">
                        <a target="_blank" href="http://quangcaoquanson.com/cac-cong-trinh-da-hoan-thanh-2016-2017" title="CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017"><img src="upload/files/huy hie.jpg" title="CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017" alt="CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017">
                        </a>
                    </div>
                    <div class="category_noidung">
                        <h1><a href="http://quangcaoquanson.com/cac-cong-trinh-da-hoan-thanh-2016-2017" title="CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017">CÁC CÔNG TRÌNH ĐÃ HOÀN THÀNH 2016 - 2017</a></h1>
                        <p>C&aacute;c hạng mục đ&atilde; l&agrave;m 2016 - 2017</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="category_item" style="margin-right:0 !important;">
                <div class="category_all">
                    <div class="category_icon">
                        <a target="_blank" href="https://www.youtube.com/" title="Thi công biển quảng cáo cửa hàng, showroom, công ty"><img src="upload/files/thiet-ke-logo-chuan-hoa-hinh-anh-doanh-nghiep.png" title="Thi công biển quảng cáo cửa hàng, showroom, công ty" alt="Thi công biển quảng cáo cửa hàng, showroom, công ty">
                        </a>
                    </div>
                    <div class="category_noidung">
                        <h1><a href="http://quangcaoquanson.com/thi-cong-bien-quang-cao-cua-hang-showroom-cong-ty" title="Thi công biển quảng cáo cửa hàng, showroom, công ty">Thi công biển quảng cáo cửa hàng, showroom, công ty</a></h1>
                        <p>M&agrave;u sắc&nbsp;thể hiện h&agrave;i h&ograve;a, h&igrave;nh ảnh&nbsp;r&otilde; n&eacute;t, bố cục sắp xếp&nbsp;c&acirc;n đối...</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="content">
            <?php get_sidebar() ?>