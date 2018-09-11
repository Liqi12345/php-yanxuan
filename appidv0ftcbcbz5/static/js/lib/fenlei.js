'use strict';

$(function () {

    var a = $('.left > .a');
    var b = $('.right');
    b.eq(0).css('display', 'block');
    a.eq(0).css({ 'border-left': '5px solid #B4292F', color: '#B4292F' });
    a.click(function () {
        var num = $(this).index();
        a.css({ 'border-left': 'none', color: '#363636' }).eq(num).css({ 'border-left': '5px solid #B4292F', color: '#B4292F' });
        b.removeClass('hot').eq(num).addClass('hot');
    });
});