<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:34:41
  from "D:\wamp\www\qugou\app\view\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8bebb105fbe1_19486466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807815acf7008086cf9274d3353f75ace69214e0' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\list.html',
      1 => 1519119280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a8bebb105fbe1_19486466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_2ilbcpko8z392j4i.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
list.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView:3.5,
        });
    })
<?php echo '</script'; ?>
>
<!-- 头部 -->
<header>
    <a href="javascript:history.back()">

        <img src="<?php echo IMG_PATH;?>
xq_03.png" class="head-left" alt="">
    </a>
    <span>推荐区</span>
    <a href="">
        <div class="head-Rig">
            <i class="iconfont iconfont4 icon-sousuo"></i>
        </div>
    </a>
</header>
<!--<div class="tongji">-->

    <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>-->
    <!--<a href="/index.php/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>-->
    <!--<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
<!--</div>-->


<div class="pirwz swiper-container" style="margin: 1.5rem 0 0.3rem 0;">
    <div class="swiper-wrapper " style="padding:0 0 0.2rem 0.25rem">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

        <a href="/index.php/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
 " class="swiper-slide">
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
<div class="br"></div>
<!-- 列表 -->

<!-- 内容 -->
<nav class="nav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="/index.php/details?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
        <div class="navbox">
            <div class="navboximg">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
            </div>
            <div class="imgbottom">
                <?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>

            </div>
            <div class="navboxbottom">
                <?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>

                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
</p>
            </div>
        </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</nav>
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
