<?php
class evaluate extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('evaluate');
    }
    function index(){
        $cid=$_GET['cid'];
        $data =  $this->db->select("select * from evaluate where pid=$cid");


        $this->smarty->assign('data',$data);
        $this->smarty->display('view/evaluate.html');
    }
}