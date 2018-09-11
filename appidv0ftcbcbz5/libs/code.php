<?php

class code{
    public $width;
    public $height;
    public $img;
    public $len = 4;
    public $char = '23456789pluytrewqasdcnmgzZMSNSBXKXPWPSKSLZADL';
    public $line = 6;
    public $nums = 50;
    public $result = '';
    public $fonts ="static/font/Helvetica.ttf";

    function __construct($w,$h)
    {
        $this->width = $w;
        $this->height = $h;
    }
    function createimg(){
        $this->img = imagecreatetruecolor($this->width,$this->height);
        $arr = $this->getBgcolor();
        $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
        imagefill($this->img,0,0,$color);
    }
    function getBgcolor(){
        $arr = [];
        for($i=0;$i<3;$i++){
            array_push($arr,rand(0,107));
        }
        return $arr;
    }
    function draw(){
        //产生干扰线
        for($i=0;$i<$this->line;$i++){
            $x1 = rand(0,$this->width/2);
            $x2 = rand($this->width/2,$this->width);
            $y1 = rand(0,$this->height/2);
            $y2 = rand($this->height/2,$this->height);
            $arr = $this->getBgcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            if($i < $this->line/2){
                imageline($this->img,$x1,$y1,$x2,$y2,$color);
            }else{
                imageline($this->img,$x2,$y1,$x1,$y2,$color);
            }
        }
        //产生干扰点
        for($i=0;$i<$this->nums;$i++){
            $arr = $this->getcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imagesetpixel($this->img,rand(0,$this->width),rand(0,$this->height),$color);
        }
    }
    function getcolor(){
        $arr = [];
        for($i=0;$i<3;$i++){
            array_push($arr,rand(108,255));
        }
        return $arr;
    }

    function drawText(){
        $str = $this->getText();
        $w = $this->width / $this->len;
        $h = $this->height / 2;
        for($i=0;$i<$this->len;$i++){
            $arr = $this->getcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imagefttext($this->img,rand(17,20),rand(-15,15),rand($w*$i+5,($i+1)*$w-10),rand($h+5,$h),$color,$this->fonts,substr($str,$i,1));
        }
    }
    function getText(){
        $result = '';
        for($i=0;$i<$this->len;$i++){
            $num = rand(0,strlen($this->char)-1);
            $result .= substr($this->char,$num,1);
        }
        $this->result = strtolower($result);
        return $result;
    }
    function output(){
        header('Content-type:image/png');
        $this->createimg();
        $this->draw();
        $this->drawText();
        imagepng($this->img);
        imagedestroy($this->img);
    }
}































