<?php
/* Smarty version 3.1.30, created on 2018-02-20 07:39:27
  from "D:\wamp\www\qugou\app\view\details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8bd0af8c7d10_54984314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e36115613b381dd5e5734394eedbd780cac84044' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\details.html',
      1 => 1519112364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a8bd0af8c7d10_54984314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="https://at.alicdn.com/t/font_471082_2ilbcpko8z392j4i.css">
<link rel="stylesheet" href="https://at.alicdn.com/t/font_563692_wxpldy0newmi.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
details.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
details.js"><?php echo '</script'; ?>
>
<div class="header">
    <a href="javascript:history.back()" class="left">
        <img src="<?php echo IMG_PATH;?>
xq_03.png" alt="">
    </a>
    <div class="headMid">
        <a href="" class="mid1">商品</a>
        <a href="#mao" class="mid1">详情</a>
    </div>
    <a href="/index.php/index" class="left4">
        <img src="<?php echo IMG_PATH;?>
xq_05.png" alt="">
    </a>
    <a href="" class="left3">
        <i class="iconfont icon-gouwuche"></i>
        <div class="radius"></div>
    </a>
</div>


<div class="swiper-container">
    <div class="swiper-wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="" class="banna swiper-slide">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" alt="">
                <div class="swiper-pagination" style="text-align: right; width:1rem;left:80%"></div>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    </div>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="xq2">
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['idesc'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['iprice'];?>
<del><?php echo $_smarty_tpl->tpl_vars['v']->value['ioprice'];?>
</del></p>
        <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['itab'];?>
</a>
    </div>
    <div class="xq2-2" >

        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['ievaluate'];?>
<br>用户评价</p>
        <a href="/index.php/evaluate?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">查看 ></a>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['v']->value['idetails'];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<!-- 猜你喜欢开始 -->
<div class="cai">
    <h2 class="ppai-top shoufa-top ztzt">大家都在看</h2>
    <nav class="nav">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
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
</div>
<!-- 猜你喜欢结束 -->
<div class="foot">
    <a href="#">
        <i class="iconfont icon-kefu"></i>
    </a>
    <a href="/index.php/shopping">立即购买</a>
    <a href="javascript: ;" class="hot">加入购物车</a>
</div>
<div class="dw">加入成功</div>
<!--footer-->

<?php }
}
