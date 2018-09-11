<?php
/* Smarty version 3.1.30, created on 2018-02-12 10:28:12
  from "D:\wamp\www\qugou\app\view\classshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a816c3cb04426_85524197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce8af061b06f794e80e41eeb4cebff901c340aa2' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\classshow.html',
      1 => 1517495828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a816c3cb04426_85524197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
classshow.js"><?php echo '</script'; ?>
>
<style>
    input{
        border:none;
        outline:none;
        background:none;
    }

</style>
<div class="right">
    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>标签</th>
            <th>描述</th>
            <th>缩略图</th>
            <th>父级id</th>
            <th>价格</th>
            <th>操作</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
 ">
            <td class="id"><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" data-type="price" ></td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ldesc'];?>
" data-type="ldesc" ></td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['lthumb'];?>
" alt="" class="img-thumbnail" style="width: 60px;height: 60px;"></td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" data-type="pid"></td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['label'];?>
" data-type="label"></td>
            <td><button class="btn btn-default" type="submit">删除</button></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
</div>
</body>
</html><?php }
}
