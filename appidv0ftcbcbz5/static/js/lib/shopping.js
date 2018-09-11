'use strict';

$(function () {
    /////////编辑/////////////////
    $('.head-Rig span').click(function () {
        $('.icon-xuanzhong').toggleClass('e');
        $('.not').toggleClass('e');
    });
    var t = void 0,
        t1 = void 0;
    ////////////////reduce//////////////
    $('.wpshulL').on('click', '.wpshulL1', function () {
        var num = $(this).next().text() * 1 - 1;

        $(this).closest('.wpright').next().text('×' + num);

        var lid = $(this).closest('.wpshulL').data('lid');
        if (num < 1) {
            var sum = confirm('是否要删除此商品');
            if (sum) {
                $.ajax({
                    url: '/index.php/shopping/del',
                    data: { lid: lid },
                    context: this,
                    success: function success(data) {
                        if (data == 'ok') {
                            var trs = $(this).closest('.wpxiaobox');
                            trs.remove();
                            trs = null;
                        } else if (data == 'no') {
                            alert('修改失败');
                        }
                    }
                });
                getNum();
                $('.total').text(0);
                $('.totalnum').text(0);
            }

            return;
        }
        $(this).next().text(num);
        clearTimeout(t);
        t = setTimeout(function () {
            $.ajax({
                url: '/index.php/shopping/addnum',
                data: { num: num, lid: lid },
                success: function success(data) {
                    if (data == 'ok') {
                        return;
                    } else if (data == 'no') {
                        alert('修改失败');
                    }
                }
            });
        }, 300);
        getNum();
    });
    ////////////////add////////////////
    $('.wpshulL').on('click', '.wpshulL3', function () {
        var num = $(this).prev().text() * 1 + 1;
        $(this).prev().text(num);

        $(this).closest('.wpright').next().text('×' + num);
        var lid = $(this).closest('.wpshulL').data('lid');
        clearTimeout(t1);
        t1 = setTimeout(function () {
            $.ajax({
                url: '/index.php/shopping/addnum',
                data: { num: num, lid: lid },
                success: function success(data) {
                    if (data == 'ok') {
                        return;
                    } else if (data == 'no') {
                        alert('修改失败');
                    }
                }
            });
        }, 300);
        getNum();
    });
    /////////////check//////////////
    $('.icon-xuanzhong').on('click', function () {
        $(this).toggleClass('check');
        getNum();
    });
    ////获取价钱数量

    function getNum() {
        var shop = $('.check').closest('.wpxiaobox');
        var total = 0,
            totalnum = 0;
        $.each(shop, function (i, e) {
            var price = $(e).find('.jaige').text().slice(1) * 1;
            var num = $(e).find('.wpshulL2').text() * 1;

            total += price * num;
            totalnum += num;
            $('.total').text(total);
            $('.totalnum').text(totalnum);
        });
    };
    ////////下单///////////
    $('.jiesuan').click(function () {

        if ($('.check').length) {
            var shop = $('.check').closest('.wpxiaobox');
            var arr = [];
            var lid = void 0;
            $.each(shop, function (i, e) {
                var num = $(e).find($('.num')).text().slice(1) * 1;
                lid = $(e).data('lid');
                arr.push({ num: num, lid: lid });
            });
            $.ajax({
                url: '/index.php/shopping/del',
                data: { lid: lid },
                context: this,
                success: function success(data) {
                    if (data == 'ok') {
                        var trs = $(this).closest('.wpxiaobox');
                        trs.remove();
                        trs = null;
                        $.ajax({
                            url: '/index.php/order/add',
                            data: { arr: arr },
                            success: function success(data) {
                                if (data == 'ok') {
                                    console.log(shop);
                                    shop.remove();
                                    shop = null;
                                    location.href = '/index.php/order';
                                } else if (data == 'error') {
                                    alert('购买失败');
                                }
                            }
                        });
                    } else if (data == 'no') {
                        alert('修改失败');
                    }
                }
            });
        } else {
            alert('请点击右上角编辑,选中商品');
        }
    });
});