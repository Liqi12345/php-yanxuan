<?php
session_start();
if (isset($_SESSION['user'])) {
class catemanage extends main {


    function __construct(){
        parent::__construct();
        $this->db = new db('category');
    }
    ////////////////////////////////////info/////////////////////////////////////
    function index()
    {
        $obj = new unit();
        $str = $obj->cateTree($this->db->mysql, 0, 0, 'category');
        $this->smarty->assign('str', $str);

            $this->smarty->display('view/cateadd.html');

    }
    ////////////////////////////////////add//////////////////////////////////////
    function add(){
        $data = $this->db->insert($_POST);

        if($data == 1){
            echo 'ok';
        }else{
            echo 'error';
        }
    }
    ////////////////////////////////////select//////////////////////////////////////

         function show(){
//        $data = $this->db->select("select * from category");
//        $this->smarty->assign('data',$data);
//        $this->smarty->display('view/cateshow.html');
        $act=$this->db->select("select * from category");
        $this->smarty->assign('tos',$act);
        $obj = new page('category','cateshow.html','show');
    }

    ////////////////////////////////////update//////////////////////////////////////
    function update(){
        $data = $_POST;

        $result = $this->db->update($data);
        if($result == 1){
            echo 'ok';
        }else if($result < 0){
            echo 'error';
        }

    }
    ////////////////////////////////////del//////////////////////////////////////
    function del(){
        $data = $_POST;
        $result = $this->db->del($data);
        if($result == 1){
            echo 'ok';
        }else if($result < 0){
            echo 'error';
        }

    }
}}else {
    echo <<<ETO
            
        <a href="/index.php">请返回登陆</a>
ETO;

}