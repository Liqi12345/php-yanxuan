<?php

class login extends main {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('logins');
    }
    function code(){
        $code = new code(100,40);
        session_start();
        $code->output();
        $_SESSION['result'] = $code->result;
    }
    function index(){
        $this->smarty->display('view/login.html');
    }
    function check(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $yzm = $_POST['yzm'];
        session_start();
        $data = $this->db->select("select * from logins");
        //echo JSON_encode($data);
        if( $_SESSION['result'] == $yzm) {
            for ($i = 0; $i < count($data); $i++) {
                if ($data[$i]['username'] == $username) {
                    $_SESSION['user'] = $username;
                    if ($data[$i]['password'] == $password) {
                        echo 'ok';
                        exit();
                    } else {
                        echo 'no';
                        exit();
                    }
                }
            }
            echo 'not exist';
            exit();
        }else{
            echo 'noo';
            exit();
        }


    }
}