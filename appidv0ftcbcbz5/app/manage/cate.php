<?php
class cate extends indexmain {
    function __construct(){
        $this->db = new db('category');
        parent::__construct();
    }
    function index(){

        $data = $this->db->select("select * from category where pid=0 order by cid asc limit 0,10");
        $arr = [];
        $num = count($data)-1;

        for($i=8;$i<18;$i++){
            $result = $this->db->select("select * from category where pid=$i");
            array_push($arr,$result);
        }

        $this->smarty->assign('data',$data);

        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('num',$num);

        $this->smarty->display('view/fenlei.html');
    }

}