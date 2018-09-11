<?php
class details extends indexmain {
    function __construct(){
        $this->db = new db('information');
        parent::__construct();
    }
    function index(){
        $pid=$_GET['pid'];
        $data = $this->db->select("select * from information where pid=$pid");


        if($data[0]){
            $arr = explode(',',$data[0]['iimg']);
            $this->db = new db('lists');
            //$pids = $this->db->select("select pid from lists where cid=$pid")[0]['pid'];
            $pids = $this->db->where('cid='.$pid)->select("pid")[0]['pid'];
            $result = $this->db->select("select * from lists where pid=$pids order by cid asc 
                      limit 0,4");

            $this->smarty->assign('arr',$arr);
            $this->smarty->assign('data',$data);
            $this->smarty->assign('result',$result);
            $this->smarty->display('view/details.html');
        }

    }
}