'use strict';

$(function () {
    var sbm = $(':submit');
    var f = $(':file');
    var hid = $('input[type="hidden"]');
    var form = $('form');
    var str = hid.val();
    f.on('change', function () {
        var file = this.files;

        var _loop = function _loop(i) {
            var obj = new FileReader();
            obj.readAsDataURL(file[i]);
            obj.onload = function (e) {
                $('<img>').attr('src', e.currentTarget.result).insertAfter(f).addClass('img-thumbnail').css({ 'display': 'block', width: 60, height: 60, marginLeft: 0, marginBottom: 20 });
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
                        hid.attr('value', url);
                    }
                }
            });
        };

        for (var i = 0; i < file.length; i++) {
            _loop(i);
        }
    });

    var ue = UE.getEditor('editor');

    sbm.click(function () {

        var obj = form.serialize();
        $.ajax({
            url: '/index.php/information/add',
            data: obj,
            type: 'post',
            success: function success(data) {
                if (data == 'ok') {
                    location.href = '/index.php/information/show';
                } else if (data == 'error') {
                    alert('添加失败');
                }
            }
        });
        return false;
    });
});