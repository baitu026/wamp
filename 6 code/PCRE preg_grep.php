<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
    <style type="text/css">
        span{
            font-size:30px;
            color: red;
        }
    </style>
</head>
<br />
/////////////<span>注意</span>:1 正则要写在单引号内，不能写在双引号 2 /内容/ 定界符'/'与正则内容不能有空格//////////////////////////////////////////////////////////////
<body>
<?php
$a='/\d{3,4}-?\d{7,8}/';        //遵循规则，写在单引号内，且不能有空格
$str=array('043212345678','0431-7654321','12345678');   //要判定的数组
$str_arr=preg_grep($a,$str);    //preg——grep用来一一判断数组中的元素是否符合正则$a的标准
var_dump($str_arr);         //输出数组
?>

</body>
</html>
