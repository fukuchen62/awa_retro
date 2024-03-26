"use strict";

// ギャラリーページのポップアップ (color_box)
// $(function () {
//     $(".gallery_img a").colorbox({
//         width: "60%",

//     });
// });


// スクロール抑制


// // .gallery_itemをクリックしたときに動きを止める
// $('.gallery_item').on('click', function () {
//     document.addEventListener('touchmove', noscroll, { passive: false });
//     document.addEventListener('wheel', noscroll, { passive: false });
// });

// // .delをクリックしたときにスクロールストップを止める
// $('#cboxOverlay').on('click', function () {
//     document.removeEventListener("wheel", noscroll, { passive: false });
//     document.removeEventListener("touchmove", noscroll, { passive: false });
// });

function noscroll(e) {
    e.preventDefault();
}
$(".gallery_img a").colorbox({
    width: "60%",
    onOpen: function () {
        document.addEventListener('touchmove', noscroll, { passive: false });
        document.addEventListener('wheel', noscroll, { passive: false });
    },
    onClosed: function () {
        document.removeEventListener("wheel", noscroll, { passive: false });
        document.removeEventListener("touchmove", noscroll, { passive: false });
    }
});
