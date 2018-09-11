'use strict';

$(function () {
	////////////////////////////////轮播图/////////////////////////////////////////////
	var dian = $('.dian > li');
	var box = $('.img-box');
	var banna = document.querySelector('.banna');
	box[0].innerHTML += box[0].innerHTML;
	var img = $('.img-box > a');
	box[0].style.width = img.length * img.width() + 'px';
	var sx = void 0,
	    m = void 0;
	banna.addEventListener('touchstart', function (e) {
		var event = e.changedTouches[0];
		box[0].style.transition = 'none';
		sx = event.pageX;
		m = box[0].offsetLeft;
		if (m / img.width() == 0) {
			box[0].style.left = -5 * img.width() + 'px';
		}
		if (m / img.width() == -9) {
			box[0].style.left = -4 * img.width() + 'px';
		}
		m = box[0].offsetLeft;
	});
	banna.addEventListener('touchmove', function (e) {
		var event = e.changedTouches[0];
		var mx = event.pageX;
		box[0].style.left = mx - sx + m + 'px';
	});
	banna.addEventListener('touchend', function () {
		var news = Math.round(box[0].offsetLeft / img.width());
		box[0].style.transition = 'all ease .7s';
		box[0].style.left = news * img.width() + 'px';

		dian.each(function (index, ele) {
			$(ele).css({ border: '2px solid #fff' });
		});

		dian[-(news % 5)].style.border = '2px solid red';
	});
});
///////////////////////////推荐//////////////////////////////////////////