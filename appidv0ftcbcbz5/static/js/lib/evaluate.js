'use strict';

$(function () {
    var img = $('.return > img');
    var tops = img.height() + 300;
    $(window).scroll(function () {

        if (tops < $(window).scrollTop()) {
            img.css('display', 'block').on('click', function () {
                $('html').stop().animate({ scrollTop: '0px'
                }, 500);
            });
        } else {
            img.css('display', 'none');
        }
    });
    $('.img').each(function (v, e) {
        if ($(e).attr('src')) {
            $(e).css('display', 'block');
        }
    });

    var span = $('.box > span:last-child');

    // console.log(span);
    span.each(function (v, e) {

        if ($(e).text() == '          ' || $(e).text() == '') {
            $(e).closest('.box').css('display', 'none');
        }
    });
});