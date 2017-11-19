<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style type="text/css">
    </style>
</head>
///////////////////////count函数用来统计数组中元素的个数///////////////////////////////////////////////////////////////////
<body>
<?php
echo"<br /><br />";
$a=array(       //     定义一个二维数组
    'Sun'=>array("Blue","Snow"),
    'Light'=>array("Backlight","Backlight and") //返回值为6因为，'Sun'和'Light'也算是数组元素
);
echo count($a,COUNT_RECURSIVE); //第一个参数为要计数的数组，如果只填一个参数，则只会输出一维数组元素的个数，而二维数组里
//元素的个数将不会统计，第二个参数可以递归的统计个数
?>
</body>
</html>