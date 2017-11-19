<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html"
      xmlns:bordercolor="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
    <style type="text/css">

    </style>
</head>
///////////////////explode将字符串依照指定的字符将它分成一个个子串，并以数组的形式存储//////////////////////////////////////////
<body>
<?PHP
$str="Blue,Snow,Backlight,Backlight and";       //定义一个字符串
$strs=explode(",",$str,4);//第一个参数表示指定的分割字符逗号，$str为要分割的字符串
//注意当第三个参数为1时不会分割，为2时只分割一次,所以如果要全部分割的话要比实际的分割数量+1
//为负数时则从后往前面分割，这时-1代表只分割最后一个，剩余保存在一个元素里输出,当指定的分割字符为空时 则会返回false
echo "<br /><br />";
print_r($strs);
?>

</body>
</html>