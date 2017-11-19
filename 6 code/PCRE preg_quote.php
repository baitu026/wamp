<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<br />
<body>
////////////////////////////////////preg_quote转义函数的使用////////////////////////////////////////////////
<?php
$a='!,$,%,^,&,*,[,],+,/,b,<,>';     //一些特殊字符，不是正则表达式，注意，@和#在这里不算特殊字符，特殊字符指的是正则里的字符
$b='@';     //定义了一个字符  可选参数
$str_one=preg_quote($a,$b);     //将两个字符串都转义，即使@不是特殊字符也会转义
echo  $str_one;
?>
</body>
</html>
