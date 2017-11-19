<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">

    </style>
    /////////////array_unique函数:删除数组中<strong>重复</strong>的元素，对重复元素它只会保留第一个，后面的全部忽略///////////////
<body>
<?php
echo "<br /><br />";
$a=array("Blue","Snow","啊哈","Backlgiht","啊哈","Backlight and");
print_r($a);
echo "<br /><br />";
$b=array_unique($a);    //两个重复的元素，只有第一个会保留下来，后面那个将忽略
print_r($b);
?>
</body>
</html>
