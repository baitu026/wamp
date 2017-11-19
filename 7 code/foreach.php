<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
////////////////////////////////foreach循环遍历数组，注意:foreach只是操作数组的备份，并非操作数组本身/////////////////////////
<body>
<?php
echo "<br /><br />";        //可以将两个回车放在一起写
$url=array(
    "www.mrbccd.com",
    "www.bcty365.com",
    "www.bc110.com"
);
foreach($url as $a){        //'as'相当于把url赋给a 这样a就有了遍历后url的值，用echo输出就可以
    echo $a."<br /><br />";     //后面加两个空格可以让其输出的时候，换行分布
}
?>
</body>
</html>
