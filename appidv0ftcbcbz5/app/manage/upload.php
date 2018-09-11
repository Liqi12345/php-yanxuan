<?php
class upload{
    function index(){
        $file = $_FILES['file'];
        if(is_uploaded_file($file['tmp_name'])){
            if(!file_exists('static/upload')){
                mkdir('static/upload');
            }
            $data = date('y-m-d');
            if(!file_exists('static/upload/'.$data)){
                mkdir('static/upload/'.$data);
            }

            $type = stristr($file['name'],'.');
            $path ='static/upload/'.$data.'/'.time().mt_rand(0,100).$type;
            $imgurl= '/'.$path;
            if(move_uploaded_file($file['tmp_name'],$path)){
                echo $imgurl;
            }
        }
    }
}

