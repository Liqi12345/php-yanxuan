<?php
session_start();
if (isset($_SESSION['user'])) {
    class evalmanage extends main
    {
        function __construct()
        {
            parent::__construct();
            $this->db = new db('evaluate');
        }

        function index()
        {
            $obj = new unit();
            $str = $obj->cateTree($this->db->mysql, 6, 0, 'information');
            $this->smarty->assign('str', $str);
            $this->smarty->display('view/evaladd.html');
        }

        function add()
        {
            $info = $_POST;
            $data = $this->db->insert($info);
            if ($data == 1) {
                echo 'ok';
            } else {
                echo 'error';
            }
        }

        function show()
        {
            // $data = $this->db->select("select * from evaluate");
            // $this->smarty->assign('data', $data);
            // $this->smarty->display('view/evalshow.html');
             $act=$this->db->select("select * from evaluate");
            $this->smarty->assign('tos',$act);
            $obj = new page('evaluate','evalshow.html','show');
        }

        function del()
        {
            $data = $this->db->del($_POST);

            if ($data == 1) {
                echo 'ok';
            } else if ($data < 0) {
                echo 'error';
            }
        }

        function update()
        {
            $data = $this->db->update($_POST);
            if ($data == 1) {
                echo 'ok';
            } else if ($data < 0) {
                echo 'error';
            }
        }
    }
}else {
    echo <<<ETO
            
        <a href="/index.php">请返回登陆</a>
ETO;

}