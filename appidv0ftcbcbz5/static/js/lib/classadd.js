'use strict';

$(function () {
    var sbm = $(':submit');
    var f = $(':file');
    var hid = $('input[type="hidden"]');
    var form = $('form');
    f.on('change', function () {

        var file = this.files[0];
        var obj = new FileReader();
        obj.readAsDataURL(file);
        obj.onload = function (e) {

            $('<img>').attr('src', e.currentTarget.result).insertAfter('div.form-group:last-of-type').addClass('img-thumbnail').css({ 'display': 'block', width: 60, height: 60, marginLeft: 0, marginBottom: 20 });
        };

        var formdata = new FormData();
        formdata.append('file', file);

        $.ajax({
            url: '/index.php/upload/index',
            type: 'post',
            data: formdata,
            processData: false,
            contentType: false,
            success: function success(data) {
                hid.attr('value', data);
            }
        });
    });

    sbm.click(function () {

        var obj = form.serialize();
        $.ajax({
            url: '/index.php/classmanage/add',
            data: obj,
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    location.href = '/index.php/classmanage/show';
                } else if (data == 'error') {
                    alert('添加失败');
                }
            }

        });
        return false;
    });
});