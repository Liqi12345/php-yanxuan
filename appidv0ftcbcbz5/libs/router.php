<?php
    class router{
        static function index(){//静态
            if(!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/'){
                $model = 'login';
                $fn = 'index';
            }else{//$_SERVER['PATH_INFO']接收index.php后面路径
                $info = explode('/',substr($_SERVER['PATH_INFO'],1));
                $model = $info[0];
                $fn = isset($info[1]) && $info[1] ? $info[1] : 'index';
            }

            if(file_exists('app/manage/'.$model.'.php')){//文件是否存在
                include 'app/manage/' .$model. '.php';
                if(class_exists($model)){//类是否存在
                    $obj = new $model();
                    if(method_exists($obj,$fn)){//方法是否存在
                        $obj->$fn();
                    }else{
                        $message = $fn.'方法不存在';
                        include 'app/view/404.html';
                    }
                }else{
                    $message = $model.'类不存在';
                    include 'app/view/404.html';
                }
            }else{
                $message = $model.'页面不存在';
                include 'app/view/404.html';
            }
        }

    }

