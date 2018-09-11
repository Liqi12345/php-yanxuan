<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:33:49
  from "D:\wamp\www\qugou\app\view\person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8beb7d40a463_52188540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '712e86e6fcc32bfee5a1b2009bb0f6dd1f829d45' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\person.html',
      1 => 1519118405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a8beb7d40a463_52188540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_h507nwt4rp0kke29.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
person.css">

<div class="top">
    <div class="touxiang">
        <a href="/index.php/user/land">
            <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['photo'];?>
" alt="">
        </a>
    </div>
    <a href="">

        <div class="yonghuming"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>

        </div>
    </a>
    <a href="">
        <div class="erweima">
            <i class="iconfont icon-erweima"></i>
        </div>
    </a>
</div>
<!-- 我的订单开始 -->

    <div class="dd">
        <a href="/index.php/order"><?php echo $_smarty_tpl->tpl_vars['result1']->value;?>
</a>
        <a href="" class="iconfont icon-dayuhao"></a>
    </div>
    <div class="dfk">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="/index.php/order">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
            <span style="font-size: 0.24rem"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</span>

        </a>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<!-- 换行 -->
<div class="huanhang1"></div>
<div class="dd">
    <a href=""><?php echo $_smarty_tpl->tpl_vars['result2']->value;?>
</a>
</div>

<div class="dd2">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="">
        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>

    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<div class="huanhang1 huanhang2"></div>

<!-- 猜你喜欢结束 -->
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
