<?php
class index extends indexmain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('category');
    }
    //////////////////16---32行///////////////////
    //找到pid为0的
    //遍历pid为0的,,,,找到它们的cid   是pid的栏目,保存到数组arrs;->$v
    //遍历arrs,得到每个cid   是pid的栏目数组->$c
    //再遍历,得到每个cid   是pid的栏目->$t



    function index(){
       $data = $this->db->select("select * from category where pid=0");
       $arr = array();
        $arrs = array();
        foreach($data as $v){

            $re = $this->db->select("select * from category where pid={$v['cid']}");
            array_push($arrs,$re);
        }

        foreach ($arrs as $c){
           foreach( $c as $t){
               array_push($arr,$t);
           }
        }

        ///////////    导航栏   /////////////
        $res = [];
        $result = $this->db->select("select * from category where pid=0 and isshow='true'");
        foreach($result as $v){
            array_push($res,$v);
        }


        /////////   周一周四新品首发   /////////
        foreach(array_slice($res,9,1) as $v){
            $re = $this->db->select("select * from lists where pid={$v['cid']}");
            $this->smarty->assign('re',$re);
            $this->smarty->assign('cname',$v['cname']);
        }
        /////////   贩量团   /////////
        foreach(array_slice($res,13,1) as $v){
            $re = $this->db->select("select * from lists where pid={$v['cid']}");
            $this->smarty->assign('re1',$re);
            $this->smarty->assign('cname1',$v['cname']);
        }
        /////////   专题精选   /////////
        foreach(array_slice($res,11,1) as $v){
            $re = $this->db->select("select * from lists where pid={$v['cid']}");
            $this->smarty->assign('re2',$re);
            $this->smarty->assign('cname2',$v['cname']);
        }
        /////////   品牌制造商   /////////
        foreach(array_slice($res,8,1) as $v){
            $re = $this->db->select("select * from lists where pid={$v['cid']}");
            $this->smarty->assign('re4',$re);

            $this->smarty->assign('cname3',$v['cname']);
        }
        /////caini love   ////////////
        $re3 = $this->db->select("select * from lists order by cid ASC limit 0,10");
        $this->smarty->assign('re3',$re3);
        ///////////banner //////////
        $banner = $this->db->select("select cthumb from category where isshow='banner'");
        $this->smarty->assign('banner',$banner);





        $this->smarty->assign('arr',$arr);
        $this->smarty->assign('result',$result);
        $this->smarty->assign('res',$res);
        $this->smarty->display('view/index.html');
    }
}