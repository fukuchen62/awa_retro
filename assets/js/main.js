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
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.shop_detail_slider',
        dots: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 850,
                settings: {
                    slidesToShow: 4,
                    lslidesToScroll: 1,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 3,
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
    });
});
