<?php
class user extends indexmain{
    function __construct()
    {
        $this->db = new db('user');
        parent::__construct();

    }
    function index(){

        $data = $this->db->insert($_POST);
        if($data == 1){
            echo 'ok';
        }else if($data < 0){
            echo 'error';
        }
    }

    function land(){
        if(!$this->checklogin()){
           $this->smarty->display('view/land.html');
        }else{
            $data = $this->db->select("select * from user where uid={$_SESSION['uid']}")[0];

            $result1 = $this->db->select("select * from category where cid=300")[0]['cname'];

            $result2 = $this->db->select("select * from category where cid=301")[0]['cname'];


            $re1 = $this->db->select("select * from category where pid=300");
            $re2 = $this->db->select("select * from category where pid=301");

            $this->smarty->assign('result1',$result1);
            $this->smarty->assign('result2',$result2);
            $this->smarty->assign('re1',$re1);
            $this->smarty->assign('re2',$re2);

            $this->smarty->assign('data',$data);

            $this->smarty->display('view/person.html');
        }

    }
    function register(){
        $this->smarty->display('view/register.html');
    }
    function check(){
        $info = $_POST['name'];
        $data = $this->db->select("select * from user where name='{$info}'")[0];
        if($data) {//用户名存在

            if("{$data['pass']}" == "{$_POST['pass']}"){
                echo 'ok';
                session_start();
                $_SESSION['islogin'] = 'yes';
                $_SESSION['uid'] = $data['uid'];
                exit();
            }
            echo 'error';//密码错误
            exit();
        }
        echo 'no';//用户名不存在
        exit();
    }

}