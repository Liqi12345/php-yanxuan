'use strict';

$(function () {
    var date = new Date();
    date.setMinutes(date.getMinutes() + 60);
    var t = setInterval(move, 1000);
    move();
    function move() {
        var now = new Date();
        var time = Math.floor((date.getTime() - now.getTime()) / 1000);

        var con = $('.con3');
        var arr = [];
        //  秒差/60得到分,取整
        var fen = Math.floor(time / 60);
        arr.push(fen);
        // 对不够一分的数取余,取整为秒
        time %= 60;
        var miao = Math.floor(time);
        arr.push(miao);

        // 遍历页面span,给span依次添加数组里的fen,miao

        var arrs = [];
        con.each(function (i, e) {
            var span = $(e).find('.span');
            arrs.push(span);
        });
        for (var i = 0; i < arrs.length; i++) {
            for (var j = 0; j < arrs[i].length; j++) {
                arrs[i][j].innerText = arr[j];
            }
        }
    }
    $('.a').click(function () {
        var aid = $(this).data('id');
        $.ajax({
            url: '/index.php/order/del',
            data: { aid: aid },
            context: this,
            success: function success(data) {
                if (data == 'ok') {
                    var trs = $(this).closest('.con');
                    trs.remove();
                    trs = null;
                    alert('取消成功');
                } else if (data == 'error') {
                    alert('取消订单失败');
                }
            }
        });
        return false;
    });
});