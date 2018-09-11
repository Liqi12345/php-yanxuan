'use strict';

// $(function(){
//     let name = $('input:hidden').eq(0).val().trim(),
//         pass = $('input:hidden').eq(1).val().trim();
//     $(':button').click(function() {
//         let data = $('form').serializeArray();
//         let user = data[0]['value'].trim(),
//             word = data[1]['value'].trim();
//
//         if(name == user){
//             if(pass == word){
//                 alert('登陆成功');
//                 location.href='/index.php/index';
//             }else{
//                 alert('密码错误');
//             }
//         }else{
//             alert('用户名不存在');
//         }
//
//         return false;
//     });
// });


$(function () {

    $(':button').click(function () {
        var formdata = $('form').serialize();
        // console.log(formdata.trim());
        // return;
        $.ajax({
            url: "/index.php/user/check",
            data: formdata,
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    alert('登陆成功');
                    location.href = '/index.php/user/land';
                } else if (data == 'error') {
                    alert('密码错误');
                } else {
                    alert('用户名不存在');
                }
            }
        });
        return false;
    });
});