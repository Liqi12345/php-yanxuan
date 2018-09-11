'use strict';

$(function () {
    /////////////delete///////////////////////////
    $('tbody').on('click', 'button', function () {
        var tr = $(this).closest('tr');
        var obj = tr.data('id');
        $.ajax({
            url: '/index.php/classmanage/del',
            type: 'post',
            data: { obj: obj },
            success: function success(data) {
                if (data == 'ok') {
                    tr.remove();
                    tr = null;
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    });
    ///////////////update/////////////////////////
    $('tbody').on('blur', 'input', function () {
        var obj = this.dataset['type'];
        var val = $(this).val();
        var trs = $(this).closest('tr')[0].dataset.id;

        $.ajax({
            url: '/index.php/classmanage/update',
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