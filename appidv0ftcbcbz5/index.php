<?php
header('Content-type:text/html;charset=utf8');
$str=substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/'));
define('WEB_PATH','http://'.$_SERVER['HTTP_HOST'].$str.'/');
define('CSS_PATH',WEB_PATH.'static/css/');
define('JS_PATH',WEB_PATH.'static/js/lib/');
define('IMG_PATH',WEB_PATH.'static/images/');
define('ICONFONT_PATH',WEB_PATH.'static/iconfont/');
define('PLUG_PATH',WEB_PATH.'plug/');
define('FONT_PATH',WEB_PATH."static/font/");
include 'libs/router.php';
include 'libs/smarty/Smarty.class.php';
include 'libs/main.php';
include 'libs/page.php';
include 'libs/db.php';
include 'libs/code.php';
include 'libs/function.php';
include 'libs/indexmain.php';
router::index();//引用类里面的方法