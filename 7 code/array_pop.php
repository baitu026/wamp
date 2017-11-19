<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">

    </style>
<body>
///////////array_pop函数:获取数组中最后一个元素，并将它'弹'出来 原数组长度-1 若失败则返回Null///////////////////////////////////
<?php
echo"<br /><br />";
$a=array("Blue","Snow","Backlight","Backlight and","我将被弹出去");
$b=array_pop($a);       //获取数组最后一个元素
echo $b."<br />";
print_r($a);        //输出原数组，这时最后一个元素将消失不见
?>
</body>
</html>
