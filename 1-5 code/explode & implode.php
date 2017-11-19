<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
    $a="Blue Snow@Backlight Backlight and@Sue";
    $str_arr=explode("@",$a);   //只能将这个字符去除而不能替换成自定义，去除后系统按标准设置
    echo $str_arr[0];

    echo "<br />";
    echo $str_arr[1];

    echo "<br />";
    echo $str_arr[2];

    echo "<br />";
    echo "//////////////////////////以上为第一种输出方法，echo只能输出数组中的元素，不能输出数组列////////////////////////////////";
    echo "<br />";

    print_r($str_arr);
    echo "<br />";
    echo"这种输出方法可以直接输出一个数组列";
    echo "<br />";
    echo "<br />";
?>
    ///////////////////////////////////以下为implode合成字符串的使用，他要与explode相对使用//////////////////////////////
<?php
    echo "<br />";
    $str="Blue Snow@Backlight@Backlight and;Sue";			//定义字符串常量
    $str_arr=explode("@",$str);                             //应用标识@分割字符串
    print_r($str_arr);
    echo "<br />";
    echo"/////////////////////////implode用于合成字符串，必须与explode相对使用//////////////////";
    echo"<br />";
    $array=implode("",$str_arr);//把explode分隔过的数组，和系统默认的分隔符改成无也可设置成其他样式，但分号不会改变，因为explode只分割了"@"没有对分号生效
    echo $array;													//输出字符串
?>

</body>
</html>