<?php
class unit{
    //修饰属性的权限,关键字
    public $str;//公共的
    //protected $sex 受保护的
     //private  私有的
/*
 * $db 数据库的句柄
 * $pid 0;
 * $flag int 标识层级
 * $tablename 表名
 * cateTree($db,0,0,'content');
 *
 *
 * */
    function __construct()//属性
    {
        $this->str = '';
    }

    //afime父栏目
    function cateTrees($db,$pid,$flag,$tablename,$tab,$now = null){
        $flag++;
        $parentid = null;
        if($now){

        $sql = "select cid from $tab where cid = $now";
        $parentid = $db->query($sql)->fetch_assoc()['cid'];
        }

        $sql = "select * from $tablename ";
        $data = $db->query($sql);
        while($row = $data->fetch_assoc()){ //$data=$db->query($sql)->fetch_all(MYSQLI_ASSOC); //转关联数组 ||
            $str = str_repeat('-',$flag);
            if($row['cid'] == $parentid){//当某个栏目的cid等于$parentid;

                $this->str .="<option value=\"{$row['cid']}\" selected>{$str}{$row['cname']}</option>";

            }                                  // fetch_assoc();转一维数组,只转换结果集里的第一条
            $this->str .="<option value=\"{$row['cid']}\">{$str}{$row['cname']}</option>";
            $this->cateTree($db,$row['cid'],$flag,$tablename);
        }

        return $this->str;

    }

    //content父栏目
    function cateTree($db,$pid,$flag,$tablename,$nows=null){//方法
    $flag++;
    $parentid = null;
    if($nows){
        $sql= "select pid from $tablename where cid=$nows";
        //获取当前cid的父栏目
        $parentid = $db->query($sql)->fetch_assoc()['pid'];//更新sql语句转为一维数组,获取里面的pid;
    }
    $sql = "select * from $tablename where pid=$pid";
    $data = $db->query($sql);
    while($row = $data->fetch_assoc()){ //$data=$db->query($sql)->fetch_all(MYSQLI_ASSOC); //转关联数组 ||
        $str = str_repeat('-',$flag);
        if($row['cid'] == $parentid){//当某个栏目的cid等于$parentid;

            $this->str .="<option value=\"{$row['cid']}\" selected>{$str}{$row['cname']}</option>";
            $this->cateTree($db,$row['cid'],$flag,$tablename);
        }                                  // fetch_assoc();转一维数组,只转换结果集里的第一条
        $this->str .="<option value=\"{$row['cid']}\">{$str}{$row['cname']}</option>";
        $this->cateTree($db,$row['cid'],$flag,$tablename);
    }

    return $this->str;

}

    function listTree($db,$pid,$flag,$tablename,$nows=null){//方法
        $flag++;
        $parentid = null;
        if($nows){
            $sql= "select pid from $tablename where cid=$nows";
            //获取当前cid的父栏目
            $parentid = $db->query($sql)->fetch_assoc()['pid'];//更新sql语句转为一维数组,获取里面的pid;
        }
        $sql = "select * from $tablename where pid=$pid";
        $data = $db->query($sql);
        while($row = $data->fetch_assoc()){ //$data=$db->query($sql)->fetch_all(MYSQLI_ASSOC); //转关联数组 ||
            $str = str_repeat('-',$flag);
            if($row['cid'] == $parentid){//当某个栏目的cid等于$parentid;

                $this->str .="<option value=\"{$row['cid']}\" selected>{$str}{$row['ldesc']}</option>";
                $this->cateTree($db,$row['cid'],$flag,$tablename);
            }                                  // fetch_assoc();转一维数组,只转换结果集里的第一条
            $this->str .="<option value=\"{$row['cid']}\">{$str}{$row['ldesc']}</option>";
            $this->cateTree($db,$row['cid'],$flag,$tablename);
        }

        return $this->str;

    }



/*
     * 句柄,表名
     * 查
     * 转数组
     * 遍历
     * id name ename miaoshu tip pid
     * 栏目 id  栏目名称  英文名称 栏目描述  栏目图片 父级栏目 操作
     * */
}


