<?php
/* Smarty version 3.1.30, created on 2018-02-13 14:30:17
  from "D:\wamp\www\qugou\app\view\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a82f6796ad345_70130614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3d07e57aa2c2b0cf2c7da1acba5a0b40e7de61' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\register.html',
      1 => 1517885169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a82f6796ad345_70130614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_scp6hj298pycik9.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
register.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
register.js"><?php echo '</script'; ?>
>
<div class="dl-top">
    <a href="javascript:history.back()" class="left"> × </a>
    <div class="center">注册</div>
</div>
<input type="text" form="myform" name="name" value="" placeholder="用户名">
<input type="password" form="myform" name="pass" value="" placeholder="密码">
<input type="tel" name="phone" form="myform" value="" placeholder="电话">
<form id="myform"></form>
<a class="tiaozhuan"href="##"><input type="button" name="button" value="注册"></a>
<div class="last">
    <i class="iconfont icon-gantanhao"></i>&nbsp;
    <a href="" class="">如果您已注册,请直接登陆。</a>

</div>
</body>
</html><?php }
}
