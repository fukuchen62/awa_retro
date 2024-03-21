"use strict";



// 詳細ページslickスライダー
$(function () {
    $('.shop_detail_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.shop_detail_slider_nav'
    });
    $('.shop_detail_slider_nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.shop_detail_slider',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 850,
                settings: {
                    slidesToShow: 2,
                    lslidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});

// ギャラリーページのポップアップ (color_box)

$(function () {
    $(".gallery_img a").colorbox({
        width: "60%",
        // innerWidth:"90%",
        innerHeight: "120%",
    });
});


$(function () {
    // マウスオーバーした時の動作
    $(".nav_item").hover(
        function () {
            // 下にスライドして表示
            // :not(:animated)をすることで連続してマウスオーバーしても連続して動作しなくなる
            $(".drop_menu:not(:animated)", this).slideDown();
        },
        // マウスオーバーを外したら上にスライドして非表示になる
        function () {
            $(".drop_menu", this).slideUp();
        }
    );
});