<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<body>
////////////////split用来分割字符串，但要以正则为标准 且区分大小写，spliti不区分大小写/////////////////////////////////////////
<?php
$a='B';     //定义分割字符串的正则表达式
$b="Blue Snow Backlight Backlight and";     //定义被分割的表达式
$arr_a=split($a,$b,2);        //注意:值要保存在数组里 第一个参数表示判别式，第二个参数表示被分割的字符串
//实际上就是将字符串中的'B'去掉，再依次划分字符串并输出    第三个参数表示分割的次数，当为1时不会分割所以设定值要 >1
var_dump($arr_a);
?>
</body>
</html>
