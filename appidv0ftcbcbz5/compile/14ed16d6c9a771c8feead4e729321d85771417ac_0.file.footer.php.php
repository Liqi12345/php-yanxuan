<?php
/* Smarty version 3.1.30, created on 2018-02-20 09:17:53
  from "D:\wamp\www\qugou\app\manage\footer.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8be7c139fe91_01506057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14ed16d6c9a771c8feead4e729321d85771417ac' => 
    array (
      0 => 'D:\\wamp\\www\\qugou\\app\\manage\\footer.php',
      1 => 1519117681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8be7c139fe91_01506057 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>class footer extends indexmain{
    function __construct()
    {
        parent::__construct();
        $this->db = new db('footer');
    }
    function index(){
       $data = $this->db->select("select * from footer");
       var_dump($data);

       $this->smarty->display('view/footer.html');
    }
}<?php }
}
