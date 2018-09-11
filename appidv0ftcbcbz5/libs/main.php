<?php
class main{
    function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('app');//设置解析模板
        $this->smarty->setCompileDir('compile');//设置解析文件夹
    }
}

