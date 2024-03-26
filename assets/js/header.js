"use strict";

$(function () {
  // ボタンがクリックされたら発動
  $(".hamburger__menu__btn").on("click", function () {
    // ドロワーメニュー部分のアニメーション
    $(".gnav__menu__content").toggleClass("is-active");
    $("body").toggleClass("is-active");
    // ボタン部分のアニメーション
    $(".hamburger__menu__btn").toggleClass("is-active");
    // スクロール固定
    $("body").hasClass("is-active");
  });
});

// リンクをクリックするとメニューが閉じる
$(".globalnavi a").click(function () {
  if (
    // もし.menu-btnと.menuの要素が.is-activeを持っていたら
    $(".hamburger__menu__btn").hasClass("is-active") &&
    $(".gnav__menu__content").hasClass("is-active")
  ) {
    // .menu-btnと.menuの要素から.is-activeを外す
    $(".hamburger__menu__btn").removeClass("is-active");
    $(".gnav__menu__content").removeClass("is-active");
  }
});
$(window).resize(function () {
  let wW = $(window).width();
  if (wW > 1023) {
    $("body").removeClass("is-active");
    $(".gnav__menu__content").removeClass("is-active");
    $(".hamburger__menu__btn").removeClass("is-active");
  }
});
