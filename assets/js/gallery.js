"use strict";

// ギャラリーページのポップアップ (color_box)

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
