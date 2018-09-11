<?php
session_start();
if(isset($_SESSION['user'])) {
class information extends main {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('information');
    }
    function index()
    {
        $obj = new unit();

        $str = $obj->listTree($this->db->mysql, 29, 0, 'lists');

        $this->smarty->assign('str', $str);

            $this->smarty->display('view/infoadd.html');

    }
    function add(){
       $data = $this->db->insert($_POST);

        if($data == 1){
            echo 'ok';
        }else{
            echo 'error';
        }
    }
    function show(){
        // $data = $this->db->select("select * from information");
        // $this->smarty->assign('data',$data);
        // $this->smarty->display('view/infoshow.html');
         $act=$this->db->select("select * from information");
        $this->smarty->assign('tos',$act);
        $obj = new page('information','infoshow.html','show');
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
}
}else {
        echo <<<ETO
            
        <a href="/index.php">请返回登陆</a>
ETO;

    }