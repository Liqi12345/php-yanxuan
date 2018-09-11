<?php
/* Smarty version 3.1.30, created on 2018-02-25 08:01:05
  from "D:\wamp\www\qugou\app\view\infoshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a926d41c6f894_24900351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7825596e719edcdcb3a5c6edbc5cd0b34ec052a' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\view\\infoshow.html',
      1 => 1517920383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/headers.html' => 1,
    'file:view/left.html' => 1,
  ),
),false)) {
function content_5a926d41c6f894_24900351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/headers.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
infoshow.js"><?php echo '</script'; ?>
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
            <th>商品标题</th>
            <th>商品描述</th>
            <th>商品现价</th>
            <th>商品原价</th>
            <th>商品标签</th>
            <th>父级栏目</th>
            <th>商品评价</th>
            <th>商品详情</th>
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
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
" data-type="cname" ></td>
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['idesc'];?>
" data-type="idesc" ></td>
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['iprice'];?>
" data-type="iprice" ></td>
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['ioprice'];?>
" data-type="ioprice" ></td>
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['itab'];?>
" data-type="itab" ></td>
            <td><input style="width:100px" type="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" data-type="pid"></td>
            <td><textarea style="width:100px" class="form-control" rows="3"
                          data-type="ievaluate" ><?php echo $_smarty_tpl->tpl_vars['v']->value['ievaluate'];?>
</textarea></td>
            <td><textarea style="width:100px" class="form-control" rows="3"
                          data-type="idetails"><?php echo $_smarty_tpl->tpl_vars['v']->value['idetails'];?>
</textarea></td>
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
