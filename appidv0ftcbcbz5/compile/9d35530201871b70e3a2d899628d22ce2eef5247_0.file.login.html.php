<?php
/* Smarty version 3.1.30, created on 2018-02-25 00:48:07
  from "D:\wamp\www\qugou\app\view\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9207c79372e4_29677873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d35530201871b70e3a2d899628d22ce2eef5247' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\login.html',
      1 => 1519519686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9207c79372e4_29677873 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquerys.js"><?php echo '</script'; ?>
>


</head>
<body>
<div class="box">
<form>
        <div class="form-group">
            <label for="exampleInputEmail1">用户名</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <img src="/index.php/login/code" alt="" onclick="this.src='/index.php/login/code?a='+Math.random()" style="float: left;">
            <input type="text" class="form-control"  placeholder="请输入验证码" name="yzm" style="float: right;margin-top:0;width: calc(100% - 115px)">
        </div>




</form>
        <input class="btn btn-default" type="submit" value="提交">

</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js"><?php echo '</script'; ?>
>


<?php }
}
