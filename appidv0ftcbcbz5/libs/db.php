<?php

class db{
    public $tablename;
    public $mysql;
    public $whereson;
    private $host='sqld.duapp.com';
    private $username='8038ffdff75f4a14ac7a9e5a072b0bb3';
    private $pass='6481ad57356e4b5a9016cbb1de38c2ab';
    private $database='QLOJIXxGBwllOwBhSFiC';
    private $port='4050';

    function __construct($tablename){
        $this->tablename = $tablename;
        $this->infos();
    }

    /////////////////////////////////////info//////////////////////////////////////////
    function infos(){

        $this->mysql = new mysqli($this->host,$this->username,$this->pass,$this->database,$this->port);
        if($this->mysql ->connect_errno){
            echo'数据库失败原因' . $this->mysql->connect_errno;
            exit();
        };
        $this->mysql->query('set names utf8');
    }
    ////////////////////////////////////select//////////////////////////////////////
    function select($info){
        if(strpos($info,'elect')){
            $sql = $info;
        }else{
            $sql = "select $info from $this->tablename $this->whereson";
        }

        $result = $this->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        return $result;
    }
    ////////////////////////////////////insert////////////////////////////////////////////////
    function insert($info){
        if(is_string($info) && strpos($info,'nsert')){
            $sql = $info;
        }else{

            $sql ="insert into $this->tablename (";
            $data = array_keys($info);
            for($i=0;$i<count($data);$i++){
                $sql .= $data[$i] .",";
            }
                $sql =substr($sql,0,-1).") values (";

            foreach ($info as $v){
                $sql .= "'".$v."',";
            }

            $sql =substr($sql,0,-1) .")";

        }

      $this->mysql->query($sql);
      return $this->mysql->affected_rows;

}
////////////////////////////////////update////////////////////////////////////
    function update($info){

      if(is_string($info) && strpos($info,'pdate')){
          $sql = $info;
      }else{

          $sql = "update $this->tablename set {$info['obj']}='{$info['val']}' where cid={$info['trs']}";
      }

        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    ////////////////////////////////////delete////////////////////////////////////////
    function del($info){
        if(is_string($info) && strpos($info,'elete')){
            $sql = $info;
        }else {
           $sql = "delete from $this->tablename where cid={$info['obj']}";

        }

        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
    function where($info){
        $this->whereson = "where ".$info;
        return $this;
    }

}


