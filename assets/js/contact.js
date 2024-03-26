"use strict";

var contact_chec = document.getElementsByClassName('parsonal_imfomation_checkbox_data');
var contact_sbmit = document.getElementsByClassName('contact_form_btns_sbmit');
$(contact_chec).on('click', function () {
    alert("クリックされました");
    if ($(this).prop("checked") == true) {
        $(contact_sbmit).css('pointer-events', 'auto');
    } else {
        $(contact_sbmit).css('pointer-events', 'none');
    }

});
