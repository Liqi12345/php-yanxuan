<?php
/* Smarty version 3.1.30, created on 2018-02-26 03:05:02
  from "D:\wamp\www\qugou\app\view\headers.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a93795ed264b3_91915471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc105aacca1c03a57fe97472128144f60ceeb73e' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\headers.html',
      1 => 1519613770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a93795ed264b3_91915471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
cateadd.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquerys.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
main.js"><?php echo '</script'; ?>
>

</head>
<body>

<div class="nav">
    <img src="<?php echo IMG_PATH;?>
lq.jpg" alt="">
    <a href="/index.php/out" class="btn btn-primary btn-lg active" role="button" style="width: 54px;height: 34px;font-size:14px;padding:9px 12px;margin-left:60%;">退出</a>
</div><?php }
}
