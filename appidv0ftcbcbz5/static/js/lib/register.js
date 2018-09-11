'use strict';

$(function () {

    $(':button').click(function () {
        var formdata = $('form').serialize();
        // console.log(formdata.trim());
        // return;
        $.ajax({
            url: "/index.php/user",
            data: formdata,
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    alert('注册成功');
                    location.href = '/index.php/user/land';
                } else if (data == 'error') {
                    alert('添加失败');
                }
            }
        });
        return false;
    });
});