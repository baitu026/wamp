<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <style type="text/css">
        body{
            font-color:blue;
        }
    </style>
</head>

<body>
/////////////////////substr_count()函数多用于搜索引擎，针对子串出现的次数进行统计///////////////////////
<?php
echo"<br>";
$b="Backlight,Backlight and";
if($i=(substr_count($b,"Backlight"))) //substr_count来搜索指定子串出现的次数
{
    echo $i;    //
}
else if(substr_count($b,"Backlight")>=2)        //两个语句第一个可以用来输出子串的长度
{                                           //这个语句可用来判断子串出现的次数是否符合要求
    echo"backlight出现的次数为2";
}
?>
</body>
</html>