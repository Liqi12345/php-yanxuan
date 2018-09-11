'use strict';

$(function () {
    var sbm = $(':submit');
    var f = $(':file').eq(0);
    var f1 = $(':file').eq(1);
    var hid = $('input[type="hidden"]').eq(0);
    var hid1 = $('input[type="hidden"]').eq(1);
    var form = $('form');
    var str = hid1.val();

    f.on('change', function () {
        var file = this.files[0];

        var obj = new FileReader();
        obj.readAsDataURL(file);
        obj.onload = function (e) {
            $('<img>').attr('src', e.currentTarget.result).insertAfter(f).addClass('img-thumbnail').css({ 'display': 'block', width: 60, height: 60, marginLeft: 0, marginBottom: 20 });
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

    f1.on('change', function () {
        var file = this.files;

        var _loop = function _loop(i) {
            var obj = new FileReader();
            obj.readAsDataURL(file[i]);
            obj.onload = function (e) {
                $('<img>').attr('src', e.currentTarget.result).insertAfter(f1).addClass('img-thumbnail').css({ 'display': 'block', width: 60, height: 60, marginLeft: 0, marginBottom: 20 });
            };

            var formdata = new FormData();
            formdata.append('file', file[i]);

            $.ajax({
                url: '/index.php/upload/index',
                type: 'post',
                data: formdata,
                processData: false,
                contentType: false,
                success: function success(data) {
                    str += data + ',';
                    if (i == file.length - 1) {

                        var url = str.slice(0, -1);
                        hid1.attr('value', url);
                    }
                }
            });
        };

        for (var i = 0; i < file.length; i++) {
            _loop(i);
        }
    });

    sbm.click(function () {

        var obj = form.serialize();
        $.ajax({
            url: '/index.php/evalmanage/add',
            data: obj,
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    location.href = '/index.php/evalmanage/show';
                } else if (data == 'error') {
                    alert('添加失败');
                }
            }
        });
        return false;
    });
});