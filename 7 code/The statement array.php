<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<body>
///////////////两个定义数组的方法 第一种是通过array函数来定义 第二种是直接为数组元素赋值//////////////////////////////////////////
<?php
    $a=array("5"=>"Blue","6"=>"Snow","7"=>"Backlight","Sue"=>"Backlight and","5"=>"覆盖Blue");//一样的下标则后面的会覆盖前面的
    //手动给元素添加下标，如果不添加则从0开始一次向后排，当给元素的下标为x时，后面的下标依次为x+1，下标也可以是字符串
    echo"<br />";
    echo $a[5];     //通过元素下标单独输出某个元素
    echo"<br />";
    echo $a['Sue'];   //通过下标字符串输出某个元素,注意字符串要用单引号括起来
    echo"<br />";
    echo "echo语句只能单个输出数组元素"."<br />";
    print_r($a);    //print_r可以输出全部数组元素
    echo"<br />";
    echo"<br />";
?>
////////////////////////直接为数组元素赋值要求同一数组元素中数组名要相同////////////////////////////////////////////////////////
<?php
    echo"<br />";
    echo"<br />";

    $a[1]="Blue";
    $a[2]="Snow";
    $a[3]="Backlight";
    $a[4]="Backlight and";
    $b[5]="不会被输出";      //因为数组名不一致，所以不会输出
    print_r($a);
    echo"<br />";
    echo"<br />";
?>
////////////////////关联数组:只要有一个键不是数字就可称为关联数组//////////////////////////////////////////////////////////////
<?php
echo"<br />";
echo"<br />";
    $a=array("first"=>"Blue Snow","Second"=>"Backlight","third"=>"Backlight and");  //字符串可以不用方括号[]括起来
    print_r($a);
echo"<br />";
echo"<br />";
    echo $a['third'];   //但在单个输出数组元素时一定要用方括号括起来
echo"<br />";
echo"<br />";
    $aha=array("number"=>2);        //如果是数字可以不用引号套起来
    $aha["number"]=10;      //将元素修改值
    echo $aha["number"];        //输出的元素为10
?>
</body>
</html>
