<?php
class out{
    function index(){
        session_start();
        $_SESSION = array();
        echo <<<ETO
<a href="/index.php">退出成功,点击返回登陆</a>
ETO;

    }
}