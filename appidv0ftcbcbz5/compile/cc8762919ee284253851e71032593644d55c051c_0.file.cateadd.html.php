<?php
/* Smarty version 3.1.30, created on 2018-02-12 13:26:24
  from "D:\wamp\www\qugou\app\view\cateadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8196003ef038_15269025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8762919ee284253851e71032593644d55c051c' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\cateadd.html',
      1 => 1517313702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a8196003ef038_15269025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateadd.js"><?php echo '</script'; ?>
>
    <div class="right">
        <form >

            <div class="form-group" >
                <label for="exampleInputText">父栏目</label>
                <select class="form-control" name="pid">
                    <option value="0">一级栏目</option>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputText" >栏目名称</label>
                <input type="text" class="form-control" id="exampleInputText" placeholder="cname" name="cname">
            </div>

            <div class="form-group">
                <label for="exampleInputFile" >上传图片</label>
                <input type="file" id="exampleInputFile" >
                <input type="hidden" name="cthumb" value="">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
<?php }
}
