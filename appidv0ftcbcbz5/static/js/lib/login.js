'use strict';

$(function () {

    var sub = $('input[type="submit"]');
    var form = $('form');

    var flagu = false,
        flagp = false,
        fyzm = false;
    sub.click(function () {
        var arr = form.serializeArray();

        var forms = {};
        arr.forEach(function (ele) {
            forms[ele.name] = ele.value;
        });

        var names = $('[name="username"]').val().trim();
        var words = $('[name="password"]').val().trim();
        var yzm = $('[name="yzm"]').val().trim();
        console.log(names);
        if (names) {
            flagu = true;
        } else {
            alert('请输入用户名');
            return false;
        }
        if (words) {
            flagp = true;
        } else {
            alert('请输入密码');
            return false;
        }
        if (yzm) {
            fyzm = true;
        } else {
            alert('请输入验证码');
            return false;
        }
        if (flagu && flagp && fyzm) {
            $.ajax({
                url: '/index.php/login/check',

                type: 'POST',
                data: forms,
                dataType: 'text',
                success: function success(data) {
                    if (data == 'ok') {
                        location.href = "/index.php/catemanage";
                        return;
                    } else if (data == 'noo') {
                        alert('验证码错误');
                        return;
                    } else if (data == 'no') {
                        alert('密码错误');
                        return;
                    }
                    alert('用户名不存在');
                }
            });
        }
        return false;
    });
});