"use strict";

// ギャラリーページのポップアップ (color_box)
$(function () {
    $(".gallery_img a").colorbox({
        width: "60%",

    });
});


// スクロール抑制
// function noscroll(e) {
//     e.preventDefault();
// }

// .gallery_itemをクリックしたときに動きを止める
// $('.gallery_item').on('click', function () {
//     document.addEventListener('touchmove', noscroll, { passive: false });
//     document.addEventListener('wheel', noscroll, { passive: false });
// });

// .delをクリックしたときにスクロールストップを止める
// $('.del').on('click', function () {
//     document.removeEventListener("wheel", noscroll, { passive: false });
//     document.removeEventListener("touchmove", noscroll, { passive: false });
// });
