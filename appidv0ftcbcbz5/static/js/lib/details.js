'use strict';

$(function () {
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction'
        }
    });

    // var lid = location.search.slice(-2);
    var lid = location.search.split("=")[1];

    var hot = $('.hot');
    var shop = $('.icon-gouwuche');
    hot.click(function () {
        $('.dw').css({ opacity: 1 }).delay(500).animate({
            opacity: 0
        });
        $('.radius').delay(1000).css('opacity', 1);
        $.ajax({
            url: '/index.php/shopping/add',
            data: { lid: lid },
            success: function success(data) {}

        });
    });
});