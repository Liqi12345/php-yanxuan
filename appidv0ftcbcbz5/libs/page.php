<?php
class page {
    function __construct($tablename,$ctemp,$method)
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir('app');
        $this->smarty->setCompileDir('compile');
        $this->tablename = $tablename;
        $this->ctemp = $ctemp;
        $this->method = $method;
        $this->mysql = new db($this->tablename);
        $this->index();
    }
    function index(){

        $data=$this->mysql->select("*");
        $len = count($data);
        $num = 5;
        $pages = ceil($len / $num);
        $page = isset($_GET['page'])?$_GET['page']:0;
        $total = $page*$num;

        $tos = $this->mysql->select("select * from $this->tablename limit $total,
$num");

        $this->smarty->assign('num',$num);
        $this->smarty->assign('len',$len);
        $this->smarty->assign('pages',$pages);
        $this->smarty->assign('page',$page);
        $this->smarty->assign('tos',$tos);
        $reduce = $page-1 >=0 ? $page-1 : $page;
        $add = $page+1 < $pages ? $page+1 : $page;
        $this->smarty->assign('reduce',$reduce);
        $this->smarty->assign('add',$add);
        $this->smarty->assign('method',$this->method);
        $this->smarty->display("view/$this->ctemp");
    }
}