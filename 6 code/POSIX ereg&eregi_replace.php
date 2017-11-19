<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<body>
//////////////ereg_replace()函数不是用来匹配变量名而用来匹配字符串，且区分大小写，eregi_replace不区分大小写/////////////////////
<?php
$a='b';     //定义正则判断式，注意ereg_place要用正则表达式来判断
$str="blue Snow backlight backlight and";   //定义字符串
$arr=eregi_replace($a,'B',$str);      //第一个参数表示正则表达式，第二个表示要替换的字符,第三个表示被替换的字符串
echo $arr;      //输入替换后的字符串
?>
</body>
</html>
