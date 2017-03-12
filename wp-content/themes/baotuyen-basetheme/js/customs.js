
$(document).ready(function () {
    $('.togger-menu').on('click', function () {
        $('#menu-primary').toggle();
    })
    $('.togger-menu-sub').on('click', function () {
        $('#sub-menu').toggle();
    })
})

$(document).ready(function () {
    //header
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
    $(window).load(function () {
        $('#featured').orbit({
            bullets: true,
            timer: true,
            captions: true,
            animation: 'fade'
        });
    });
    //search
    jQuery("#search").submit(function () {
        if ($("#ten").val() == "" || $("#ten").val() == "Nhập từ khóa...") {
            alert('Bạn chưa nhập từ khóa tìm kiếm');
            $("#ten").focus();
            return false;
        } else {
            return true;
        }
    });
    $('#menu_top > li').hover(function () {
        $(this).children('.sub_menu').css('display', 'block');
        //$(this).children('.sub-menu').stop().show(400);
    }, function () {
        $(this).children('.sub_menu').css('display', 'none');
    });
//    $("#owl-demo14").owlCarousel({
//        navigation: true,
//        navigationText: ["<", ">"],
//        autoPlay: 5000,
//        items: 4,
//        itemsDesktop: [1199, 3],
//        itemsDesktopSmall: [979, 3]
//    });
//
//    $("#owl-demo16").owlCarousel({
//        navigation: true,
//        navigationText: ["<", ">"],
//        autoPlay: 5000,
//        items: 4,
//        itemsDesktop: [1199, 3],
//        itemsDesktopSmall: [979, 3]
//    });
//
//    $("#owl-demo18").owlCarousel({
//        navigation: true,
//        navigationText: ["<", ">"],
//        autoPlay: 5000,
//        items: 4,
//        itemsDesktop: [1199, 3],
//        itemsDesktopSmall: [979, 3]
//    });
//
//    $("#owl-demo21").owlCarousel({
//        navigation: true,
//        navigationText: ["<", ">"],
//        autoPlay: 5000,
//        items: 4,
//        itemsDesktop: [1199, 3],
//        itemsDesktopSmall: [979, 3]
//    });

});