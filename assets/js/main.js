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

$('#js-slick').slick({
    arrows: true,
    dots: true,
    infinite: false,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 720,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});
