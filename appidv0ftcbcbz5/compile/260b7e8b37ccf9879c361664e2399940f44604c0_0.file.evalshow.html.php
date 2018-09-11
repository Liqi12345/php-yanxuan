<?php
/* Smarty version 3.1.30, created on 2018-02-26 02:32:00
  from "D:\wamp\www\qugou\app\view\evalshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9371a0eecf25_14503913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '260b7e8b37ccf9879c361664e2399940f44604c0' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\evalshow.html',
      1 => 1517990684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a9371a0eecf25_14503913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
evalshow.js"><?php echo '</script'; ?>
>
<style>
    input{
        border:none;
        outline:none;
        background:none;
        width: 100px !important;
    }

</style>
    <div class="right">
        <table class="table table-striped">
            <theard>
                <th>id</th>
                <th>评价者</th>
                <th>头像</th>
                <th>评价描述</th>
                <th>掌柜回复</th>
                <th>评价图片</th>
                <th>评价时间</th>
                <th>商品标签</th>
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
                   <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['etitle'];?>
" data-type="etitle" ></td>
                   <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['ehead'];?>
" alt="" class="img-thumbnail" style="width: 60px;height: 60px;"></td>
                   <td><textarea style="width:100px" class="form-control" rows="3"
                                 data-type="edesc" ><?php echo $_smarty_tpl->tpl_vars['v']->value['edesc'];?>
</textarea></td>
                   <td><textarea style="width:100px" class="form-control" rows="3"
                                 data-type="eboss" ><?php echo $_smarty_tpl->tpl_vars['v']->value['eboss'];?>
</textarea></td>

                     <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['eimg'];
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', explode(',',$_prefixVariable1));
?>
                       <td>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                   <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" alt="" class="img-thumbnail" style="width: 60px;height: 60px;">
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                       </td>

                   <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['edata'];?>
" data-type="edata" ></td>
                   <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['etag'];?>
" data-type="etag" ></td>
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
