'use strict';

$(function () {
    var uls = $('.aside > h3');
    uls.click(function () {
        $(this).next('ul').slideToggle();
    });
});