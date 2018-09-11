<?php


class lists extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('lists');
    }
    function index(){
        $cids = $_GET['cid'];
        $data = $this->db->select("select * from lists where pid=$cids");

        $this->smarty->assign('data',$data);

        $pid = $this->db->select("select * from category where cid=$cids")[0]['pid'];
        $result = $this->db->select("select * from category where pid=$pid");

        $this->smarty->assign('result',$result);


        $this->smarty->display('view/list.html');
    }
}