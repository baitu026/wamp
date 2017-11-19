<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>无标题</title>
    <style type="text/css">
        span{
            font-size:25px;
        }
    </style>
</head>

<body>
////////////////////////str_ireplace替换指定的字符串|且不区分大小写|//如果要区分大小写则使用 str_replace()//////////////////
<?php
echo "<br />";
echo "<br />";
$a="Blue Backlight and, Blue Backlight and,Blue Backlight and, BLUe Backlight and, BLue Backlight and";
$b="Backlight";
$c="Blue";
echo str_ireplace($c,$b,$a);    //str_ireplace中第一个参数为要替换的字符串，第二个为要替换为的字符串，
echo"<br />";                   //第三个为在哪个字符串内替换
echo "<br />";
?>
////////////////////////////查询关键字描红功能/////////////////////////////////////////////////////////////
<?php
    echo "<br />";
    echo "<br />";
$str="BLUE SNOW Backlight Backlight and ";
$place="SNOW Backlight";
echo str_ireplace($place,"<span>"."<font color='red '>".$place."</font>"."</span>",$str);
            //注意，要用双引号括起来 span为内联标签，h1也可以增大字体，但是是块级要换行，所以退而求其次，在上方style下增大了字体
echo "<br />";
echo "<br />";
?>
///////////////////////注意不是str_replace(),是substr_replace()对字符串中的部分进行替换///////////////////////////////////////////////////////////////////////////
<?php
echo "<br />";
echo "<br />";
    $a="埃里克到家了国家蓝色的雪了开关机";
    $b="Blue Snow";
    echo substr_replace($a,$b,0,0);     //第一个参数表示要操作的字符串，第二个为要替换的的字符串
    //第三个为替换字符串的开始位置正数为从头开始，负数从结尾开始，0从第一个字符开始
    //第四个参数为替换字符串的长度，正数从头开始，负数从结尾开始，注意!! 0表示插入而不是替换
?>

</body>
</html>
