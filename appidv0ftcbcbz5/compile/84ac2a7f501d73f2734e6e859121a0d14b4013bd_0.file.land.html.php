<?php
/* Smarty version 3.1.30, created on 2018-02-13 14:29:54
  from "D:\wamp\www\qugou\app\view\land.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a82f6621c71b6_32951112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ac2a7f501d73f2734e6e859121a0d14b4013bd' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\land.html',
      1 => 1517900238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a82f6621c71b6_32951112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
land.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
land.js"><?php echo '</script'; ?>
>
<div class="dl-top">
    <a href="javascript:history.back()" class="left"> × </a>
    <div class="center">趣购网</div>
    <a href="zhuce.html" class="right">注册</a>
</div>
<input type="text" name="name" value="" form="myform" placeholder="用户名">
<input type="password" name="pass" value="" form="myform" placeholder="密码">
<!--<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" name="name">-->
<!--<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pass'];?>
" name="pass">-->
<form id="myform"></form>
<a class="tiaozhuan"href="#"><input type="button"name="button" value="登陆"></a>
<div class="last">
    <a href="/index.php/user/register" class="zhleft">注册账号</a>
    <a href="" class="zhright">忘记密码</a>
</div>

</body>
</html><?php }
}
