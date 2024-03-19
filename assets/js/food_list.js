"use strict";


// スライドショー
$('.slider').slick({
    arrows: false,//左右の矢印はなし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
    speed: 6900,//スライドのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
    slidesToShow: 3,//スライドを画面に4枚見せる
    slidesToScroll: 1,//1回のスライドで動かす要素数
    responsive: [
        {
            breakpoint: 769,//モニターの横幅が769px以下の見せ方
            settings: {
                slidesToShow: 2,//スライドを画面に2枚見せる
            }
        },
        {
            breakpoint: 426,//モニターの横幅が426px以下の見せ方
            settings: {
                slidesToShow: 1.5,//スライドを画面に1.5枚見せる
            }
        }
    ]
});


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

var category_id = document.getElementsByClassName('category_item');
$(category_id).on('click', function () {
    // alert("クリックされました");
    $('div').removeClass('category_item_green');
    $(this).addClass('category_item_green');
    $('.bg').remove();
});
