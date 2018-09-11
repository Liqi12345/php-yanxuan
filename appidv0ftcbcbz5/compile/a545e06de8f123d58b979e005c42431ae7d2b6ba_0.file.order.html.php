<?php
/* Smarty version 3.1.30, created on 2018-02-24 03:18:33
  from "D:\wamp\www\qugou\app\view\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a90d98994c4e3_43188912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a545e06de8f123d58b979e005c42431ae7d2b6ba' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\order.html',
      1 => 1519435241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a90d98994c4e3_43188912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_2ilbcpko8z392j4i.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
order.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
order.js"><?php echo '</script'; ?>
>
<!-- 头部 -->
<header>
    <a href="javascript:history.back()">

        <img src="<?php echo IMG_PATH;?>
xq_03.png" class="head-left" alt="">
    </a>
    <span>我的订单</span>
    <a href="">
        <div class="head-Rig">
            <i class="iconfont iconfont4 icon-sousuo"></i>
        </div>
    </a>
</header>
<!-- 列表 -->
<aside>
    <a href="">
        <div class="aside1">	全部 </div>
    </a>
    <a href="#" class="aside1">待付款</a>
    <a href="#" class="aside1">待发货 </a>
    <a href="#" class="aside1">已发货 </a>
    <a href="#" class="aside1">待评价 </a>
</aside>


<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['arrs']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['arrs']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

<div class="con">
    <div class="con1">
        <span>订单编号:24270615</span>
        <a href="" class="a" data-id="<?php echo $_smarty_tpl->tpl_vars['aid']->value[$_smarty_tpl->tpl_vars['i']->value];?>
">取消订单</a>
    </div>

    <a href="" class="con2">

        <img src="<?php echo $_smarty_tpl->tpl_vars['arrs']->value[$_smarty_tpl->tpl_vars['i']->value]['lthumb'];?>
" alt="">

        <p>
            <span class="span2"><?php echo $_smarty_tpl->tpl_vars['arrs']->value[$_smarty_tpl->tpl_vars['i']->value]['ldesc'];?>
</span>
            <span class="span1">×<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</span>

        </p>
    </a>
    <div class="con3">
        <span>应付:¥<?php ob_start();
echo mb_substr($_smarty_tpl->tpl_vars['arrs']->value[$_smarty_tpl->tpl_vars['i']->value]['label'],1,5,'utf-8');
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1*$_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->tpl_vars['i']->value];?>
元</span>
        <a href="">付款 <span class="span"></span>:<span class="span"></span></a>
    </div>
</div>
<?php }
}
?>

<?php }
}
