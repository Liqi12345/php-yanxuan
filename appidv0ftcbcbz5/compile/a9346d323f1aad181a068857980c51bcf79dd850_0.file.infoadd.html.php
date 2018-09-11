<?php
/* Smarty version 3.1.30, created on 2018-02-12 10:28:52
  from "D:\wamp\www\qugou\app\view\infoadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a816c6499b0a8_96528366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9346d323f1aad181a068857980c51bcf79dd850' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\infoadd.html',
      1 => 1517920169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a816c6499b0a8_96528366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/ueditor.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo PLUG_PATH;?>
ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
infoadd.js"><?php echo '</script'; ?>
>
    <div class="right">
        <form >
            <div class="form-group">
                <label for="exampleList">所属分类</label>
                <select class="form-control" id="exampleList" name="pid">
                    <option value="0">一级栏目</option>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>
;
                    <select>
            </div>
            <div class="form-group">
                <label for="exampleCname">商品标题</label>
                <input type="text" class="form-control" id="exampleCname" placeholder="title" name="cname">
            </div>

            <div class="form-group">
                <label for="exampleType">商品描述</label>
                <input type="text" class="form-control" id="exampleType" placeholder="desc" name="idesc">
            </div>

            <div class="form-group">
                <label for="examplePrice">商品现价</label>
                <input type="text" class="form-control" id="examplePrice" placeholder="price" name="iprice">
            </div>

            <div class="form-group">
                <label for="examplePrices">商品原价</label>
                <input type="text" class="form-control" id="examplePrices" placeholder="oprice" name="ioprice">
            </div>

            <div class="form-group">
                <label for="exampleTag">商品标签（用逗号隔开）</label>
                <input type="text" class="form-control" id="exampleTag" placeholder="tag" name="itab">
            </div>



            <div class="form-group">
                <label for="exampleColor">商品评价</label>
                <input type="text" class="form-control" id="exampleColor" placeholder="evaluate" name="ievaluate">
            </div>

            <div class="form-group">
                <label for="exampleImage">商品详图</label>
                <input type="file" id="exampleImage" multiple >
            </div>
            <input type="hidden" name="iimg" value="" >
            <div class="form-group">
                <label>商品详情</label>
                <div id="editor" type="text/plain"   name="idetails" style="width:1024px;height:300px;" required></div>

                <button type="submit" class="btn btn-default">
            </div>
        </form>
    </div>
</body>
</html>

<?php }
}
