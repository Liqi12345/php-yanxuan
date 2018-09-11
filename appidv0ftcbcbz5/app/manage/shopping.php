<?php

class shopping extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('lists');
    }
    function index(){
        if($this->checklogin()){

            $data = $this->db->select("select lists.* , shop.num from shop,lists where lists.cid=shop.lid and uid={$_SESSION['uid']}");


            $this->smarty->assign('data',$data);
            $this->smarty->display('view/shopping.html');
        }else{
            $this->smarty->display('view/land.html');
        }

    }
    function add(){
        $lid = $_GET['lid'];
        session_start();
        $uid = $_SESSION['uid'];
        $this->db = new db('shop');
       $data = $this->db->select("select * from shop where lid={$lid} and uid={$uid}");

       if(count($data) === 0){

           $data = $this->db->insert("insert into shop (lid,uid,num) VALUES ({$lid},{$uid},1)");

       }else{
            $num =  ++$data[0]['num'];
            $data = $this->db->update("update shop set num={$num} where lid={$lid} and uid={$uid}");

       }
    }
    function addnum(){
        session_start();
       $uid = $_SESSION['uid'];
        $data = $this->db->update("update shop set num={$_GET['num']} where lid={$_GET['lid']} and uid=$uid");
       if($data == 1) {
           echo 'ok';
        }else if($data < 0){
           echo 'no';
       }

    }
    function del(){

        $data = $this->db->del("delete from shop where lid={$_GET['lid']}");
        if($data == 1) {
            echo 'ok';
        }else if($data < 0){
            echo 'no';
        }
    }
}