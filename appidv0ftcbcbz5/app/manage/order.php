<?php

class order extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('orders');
    }
    function add(){
        $arr = $_GET['arr'];
        session_start();
        $uid = $_SESSION['uid'];
        $this->db->insert("insert into orders (uid) VALUES ($uid)");
        $oid = $this->db->mysql->insert_id;

        $db = new db('orderattach');
        $sql = "insert into orderattach (lid,num,oid) VALUES ";
        for($i=0;$i<count($arr);$i++){
            $sql .= "('".$arr[$i]['lid']."','".$arr[$i]['num']."',".$oid."),";

        }
        $sql = substr($sql,0,-1);
        $rows = $db->insert($sql);
        if($rows >=0){
            echo 'ok';
        }else if($rows < 0){
            echo 'error';
        }

    }

    function index(){
        session_start();
        $uid = $_SESSION['uid'];
        $data = $this->db->select("select oid from orders where uid=$uid");
        $arr = [];
        $arrs = [];
        $num = [];
        $aid = [];
        for($i=0;$i<count($data);$i++){
            $result = $this->db->select("select * from orderattach where
            oid={$data[$i]['oid']}");////附表里的oid///
            array_push($arr,$result);

            foreach($arr[$i] as $v){
                $da = $this->db->select("select * from lists where cid={$v['lid']}")[0];
                array_push($arrs,$da);
                array_push($num,$v['num']);//购买数量//////
                array_push($aid,$v['aid']);///data-id//////

            }


        }



        $this->smarty->assign('arrs',$arrs);
        $this->smarty->assign('num',$num);
        $this->smarty->assign('aid',$aid);

        $this->smarty->display('view/order.html');
    }

    function del(){

        $row = $this->db->del("delete from orderattach where aid={$_GET['aid']}");
        if($row >=0){
            echo 'ok';
        }else if($row < 0){
            echo 'error';
        }
    }

}