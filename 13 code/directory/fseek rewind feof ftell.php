<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>rewind使指针重新回到文件开头 fseek函数可以移动指针位置 feof函数检验指针是否到达末尾 ftell函数查看当前指针位置</title>
</head>
<body>
<?php
$path='tm1';
$a=fopen($path,'rb');
if(!file_exists($a)){        //如果文件打开成功
    echo "总字节数:".filesize($path)."<br />";
    echo "当前指针位置:".ftell($a)."<br />";
    $b=fseek($a,6);            //将指针向前移动6个单位
    echo "移动后的指针位置: ".$b."<br />";
    echo "当前位置到行尾的内容: ".fgets($a)."<br />";
    if(feof($a))
        echo "已到达行尾 当前指针位置: ".ftell($a)."<br />";
    rewind($a);     //将指针重新指向开头
    echo "当前指针位置:".ftell($a)."<br />";
    echo "输出前6个字节的内容: ".fgets($a,7)."<br />";
}
else{
    echo "文件不存在";
}
?>
</body>
</html>