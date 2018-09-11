<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:33:45
  from "D:\wamp\www\qugou\app\view\shopping.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8beb79bad7a9_72373956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd57d9a5bdf8a27452b596fe730edb26aedea8185' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\shopping.html',
      1 => 1519118372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a8beb79bad7a9_72373956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_2ilbcpko8z392j4i.css">
<link rel="stylesheet" href="https://at.alicdn.com/t/font_563692_zvo9z7bwoymsra4i.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
shopping.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
shopping.js"><?php echo '</script'; ?>
>
<header class="top">
    <a href="javascript:history.back()">

        <img src="<?php echo IMG_PATH;?>
xq_03.png" class="head-left" alt="">
    </a>
    <span>购物车</span>
    <a href="##">
        <div class="head-Rig">
            <span>编辑</span>
        </div>
    </a>
</header>

<!-- 购物物品 -->
<div class="wuPing">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="wpxiaobox" data-lid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">

 
        <!-- 图片盒子 -->
        <div class="wpxiaobox1">
            <i class="iconfont icon-xuanzhong e" style="float: left;"></i>
            <a href="/index.php/details?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
            </a>
        </div>
        <!-- 右侧盒子 -->
        <div class="wpright">
            <a href="##" class="a22"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
            </a>
            <a href=""><p><?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>
</p></a>
            <div class="jaige"><?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
</div>
            <div class="wpshulL" data-lid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <a href="#" class="wpshulL1">-</a>
                <div class="wpshulL2"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</div>
                <a href="#" class="wpshulL3">+</a>
            </div>
        </div>
        <div class="num"  style="font-size:0.26rem;">×<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</div>

    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>

<div class="foots">
    <i class="iconfont icon-xuanzhong e" style="color: #b52829;"></i>
    <span class="not e">请选择</span>
    <a href="#" class="jiesuan">下单</a>
    <span>合计<strong class="total">0</strong></span>
    <span>共<strong class="totalnum">0</strong>件</span>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
