<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">

    </style>
    ///////////array_push函数:将数组当成一个'栈'向数组的<strong>末尾</strong>添加新的元素///////////////////////////////////////
<body>
<?php
echo  "<br /><br />";
$a=array("Blue","Snow","Backlight");
array_push($a,"Backlight and"); //第一个元素为要操作的数组，第二个为要加入的元素，他在出现在数组的末尾
print_r($a);
?>
</body>
</html>
