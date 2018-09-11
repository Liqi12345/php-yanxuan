<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:27:46
  from "D:\wamp\www\qugou\app\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8bea123e75a3_35224340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca41ddaa59855b25331fb156ae8781367c5dfbc' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\index.html',
      1 => 1519118865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_5a8bea123e75a3_35224340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.min.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        var swiper = new Swiper('.tj-nav1 .swiper-container', {
            slidesPerView:4,
        });
        var swiper = new Swiper('.sf .swiper-container', {
            slidesPerView: 2.4,

        });
    })
<?php echo '</script'; ?>
>
<!-- 推荐顶栏开始 -->
<div class="shouye">
    <a href="" class="shao">扫一扫</a>
    <input class="input1" type="text" placeholder="搜索商品,共10842款好物">
    <a href="" class="xiaoxi">消 息</a>
</div>
<!-- 推荐顶栏结束 -->
<!-- 推荐nav开始 -->
<div class="tj-nav1">
<div class="tj-nav swiper-container " style="padding-left:0.3rem;position:fixed;z-index: 500">

    <ul class="swiper-wrapper">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li class="swiper-slide">
            <a href="/index.php/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
</div>
</div>
<!-- 推荐nav结束 -->
<!-- banna开始 -->
<div class="banna">
    <div class="img-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="/index.php/details?pid=7">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
    <ul class="dian">
        <li class="hots"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- banne结束 -->
<!-- 网易自营品牌开始 -->
<div class="wy">
    <div class="wy1">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['res']->value,0,3), 'v');
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
    <div class="wy2">
        <div class="wy2-1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['res']->value,3,5), 'v');
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
    </div>
</div>
<!-- 网易自营品牌结束 -->
<!-- 品牌开始 -->
<div class="ppai">
    <h2 class="ppai-top"><?php echo $_smarty_tpl->tpl_vars['cname3']->value;?>
<i class="iconfont icon-gengduo"></i></h2>
    <div class="fl1 fl2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re4']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="" class=" ff1 ff2" style="background:#f4f4f4;position: relative;">
            <span class="span"><?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
</span>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="" style="position: absolute; width: 2.37rem;right:0;top:0">
            <br><div class="f-zi" style="width: 2.5rem;"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</div>
            <br><span><?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>
</span>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<!-- 品牌结束 -->
<!-- 新品首发开始 -->
<div class="sf">
    <h2 class="ppai-top shoufa-top"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>

        <i class="iconfont icon-gengduo"></i>
    </h2>
    <div class="sf-bottom swiper-container" >
        <div class="sf-b-top swiper-wrapper" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a class="swiper-slide" href="/index.php/details?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
            <div class="navbox">
                <div class="navboximg box2">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
                </div>
                <div class="imgbottom imgbottom1">
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

        </div>
    </div>
</div>

<!-- 新品首发结束 -->
<!-- 饭量团开始 -->
<div class="fl">
    <h2 class="ppai-top shoufa-top ztzt"><?php echo $_smarty_tpl->tpl_vars['cname1']->value;?>
&nbsp;
        <i class="iconfont icon-gengduo"></i></h2>
    <div class="fl1 ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="" class=" ff1">
            <span class="span"><?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
</span>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
            <div class="f-zi"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</div>
            <br><span><?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>
</span>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<!-- 饭量团结束 -->
<!-- 限时购开始 -->
<div class="sf ">
    <h2 class="ppai-top shoufa-top"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['res']->value,10,1), 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
echo $_smarty_tpl->tpl_vars['v']->value['cname'];
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <i class="iconfont icon-gengduo"></i>
    </h2>
    <div class="sf-bottom swiper-container" >
        <div class="sf-b-top swiper-wrapper" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a class="swiper-slide" href="/index.php/details?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <div class="navbox">
                    <div class="navboximg box2">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
                    </div>
                    <div class="imgbottom imgbottom1">
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

        </div>
    </div>
</div>
<!-- 限时购结束 -->
<!-- 专题精选开始 -->
<div class="zt">
    <h2 class="ppai-top shoufa-top ztzt"><?php echo $_smarty_tpl->tpl_vars['cname2']->value;?>
&nbsp;
        <i class="iconfont icon-gengduo"></i></h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="zt2">
        <div class="zt2-1">
            <div class="zt-dw">
                <div class="dw1">
                    <a href="">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="">
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>

                            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>
</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- 专题精选结束 -->
<!-- 猜你喜欢开始 -->
<div class="cai">
    <h2 class="ppai-top shoufa-top ztzt"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_slice($_smarty_tpl->tpl_vars['res']->value,12,1), 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
echo $_smarty_tpl->tpl_vars['v']->value['cname'];
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</h2>
    <nav class="nav">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['re3']->value, 'v');
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
<?php $_smarty_tpl->_subTemplateRender("file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
