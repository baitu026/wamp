<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<body>
/////////////ereg是一个布尔类型的函数，正确返回true，错误返回false////////ereg区分大小写,eregi不区分大小写///////////////////////
<?php
$a="^[$][[:alpha:]_][[:alnum:]]*";      //^表示开始的位置，[]表示忽略大小写,$表示行的结尾,[[:alpha:]]表示匹配字母的集合我也不知道下划线干嘛
//[[:alnum:]]匹配字母和数字的集合,*表示匹配前面的字符0次或多次
$_="Blue Snow";
ereg($a,'$_',$B);//必选:第一个参数表示用来匹配的表达式，必选:第二个为一个变量名，可选:第三个为一个数组.
//那么问题来了，ereg匹配什么呢? ereg只是检验变量名，用来判断变量名是否符合表达式的要求
var_dump($B);   //输出数组
?>
</body>
</html>
