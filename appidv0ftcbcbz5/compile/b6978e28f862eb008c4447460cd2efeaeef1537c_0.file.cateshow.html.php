<?php
/* Smarty version 3.1.30, created on 2018-02-26 01:58:15
  from "D:\wamp\www\qugou\app\view\cateshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9369b74c50e8_89588473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6978e28f862eb008c4447460cd2efeaeef1537c' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\cateshow.html',
      1 => 1519116576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a9369b74c50e8_89588473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateshow.js"><?php echo '</script'; ?>
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
            <theard>
                <th>id</th>
                <th>栏目名称</th>
                <th>缩略图</th>
                <th>父级栏目</th>
                <th>操作</th>
            </theard>
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
                   <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
" data-type="cname" ></td>
                   <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="" class="img-thumbnail" style="width: 60px;height: 60px;"></td>
                   <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" data-type="pid"></td>
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
</html>
<?php }
}
