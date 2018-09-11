<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:33:44
  from "D:\wamp\www\qugou\app\view\fenlei.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8beb78d59e48_81905128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b08b3d1e0a20ed95fd0133b5d21448c648a0bd6' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\fenlei.html',
      1 => 1519118351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a8beb78d59e48_81905128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
fenlei.css">

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
fenlei.js"><?php echo '</script'; ?>
>
<div class="top">
    <input type="text" placeholder="搜索商品，共9001款好物">
    <div class="logo">
        <img src="<?php echo IMG_PATH;?>
Screenshot_2017-10-10-23-11-18-728_com.netease_03.png" alt="">
    </div>
</div>
<!-- 左侧开始 -->
<div class="left">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a class="a" href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- 右侧大盒子 -->
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

    <div class="right ">
        <!-- 图片 -->
        <section class="banner">
            <a href=""><img src="<?php echo IMG_PATH;?>
fenlei.png" alt=""></a>
        </section>
        <!-- 文字 -->
        <div class="bantwz">
            <span>——</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]['cname'];?>
分类&nbsp;&nbsp;&nbsp;<span>——</span>
        </div>
        <!-- 图片文字 -->
        <div class="pirwz">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->tpl_vars['i']->value], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

            <a href="/index.php/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <div class="pirwzbox">
                    <div class="boximg1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
                    </div>
                    <div class="boxwz1"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
<?php }
}
?>



<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;
<?php }
}
