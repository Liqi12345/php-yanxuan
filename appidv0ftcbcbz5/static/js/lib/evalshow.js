'use strict';

$(function () {
    $('button.btn').click(function () {
        var tr = $(this).parents('tr').data('id');
        $.ajax({
            url: '/index.php/evalmanage/del',
            type: 'post',
            data: { 'obj': tr },
            context: this,
            success: function success(data) {
                if (data == 'ok') {
                    var trs = $(this).closest('tr');
                    trs.remove();
                    trs = null;
                    alert('删除成功');
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    });
    $('tbody').on('blur', 'input', function () {
        var val = $(this).val();
        var obj = $(this).data('type');
        var trs = $(this).closest('tr')[0].dataset.id;
        $.ajax({
            url: '/index.php/evalmanage/update',
            data: { obj: obj, val: val, trs: trs },
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    alert('修改成功');
                } else if (data == 'error') {
                    alert('修改失败');
                }
            }
        });
    });
    $('tbody').on('blur', 'textarea', function () {
        var val = $(this).val();
        var obj = $(this).data('type');
        var trs = $(this).closest('tr')[0].dataset.id;
        $.ajax({
            url: '/index.php/evalmanage/update',
            data: { obj: obj, val: val, trs: trs },
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    alert('修改成功');
                } else if (data == 'error') {
                    alert('修改失败');
                }
            }
        });
    });
});