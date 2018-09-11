<?php
/* Smarty version 3.1.30, created on 2018-02-12 13:37:28
  from "D:\wamp\www\qugou\app\view\evaluate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8198984c0827_81496388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2962cb1483ac50b60bafed22cdae6e575e068bd5' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\evaluate.html',
      1 => 1517982739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a8198984c0827_81496388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_2ilbcpko8z392j4i.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
evaluate.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
evaluate.js"><?php echo '</script'; ?>
>

<!-- 头部 -->
<header>
    <a href="javascript:history.back()">

        <img src="<?php echo IMG_PATH;?>
xq_03.png" class="head-left" alt="">
    </a>
    <span>商品评价</span>
    <a href="">
        <div class="head-Rig">
            <!--<i class="iconfont iconfont4 icon-sousuo"></i>-->
        </div>
    </a>
</header>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<section>
    <div class="radius">
        <a href="">
             <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['ehead'];?>
" alt="">
        </a>
    </div>
        <span class="span"><?php echo $_smarty_tpl->tpl_vars['v']->value['etitle'];?>
</span><br>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['v']->value['edesc'];?>

    </p>
    <?php $_smarty_tpl->_assignInScope('foo', explode(',',$_smarty_tpl->tpl_vars['v']->value['eimg']));
?>
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['foo']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['foo']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" alt="" class="img" style="display: none;">
    <?php }
}
?>

    <div class="box">
        <span style="font-size: 0.28rem;font-weight: 600">掌柜回复:</span>&nbsp;&nbsp;
        <span style="font-size: 0.3rem"><?php echo $_smarty_tpl->tpl_vars['v']->value['eboss'];?>
</span>

    </div>

   <div class="time">
       <span><?php echo $_smarty_tpl->tpl_vars['v']->value['edata'];?>
</span>月
       <span>09</span>日
      &nbsp; <span><?php echo $_smarty_tpl->tpl_vars['v']->value['etag'];?>
</span>
   </div>

</section>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<div class="last">木有了...</div>
<div class="return">
    <img src="<?php echo IMG_PATH;?>
top.png" alt="">
</div>
<?php }
}
