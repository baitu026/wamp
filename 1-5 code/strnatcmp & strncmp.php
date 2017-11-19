<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
//////////////strnatcmp函数:比较数字大写，也比较字节数，且区分大小写
<?php
	$a='Blue Snow7';
	$b='Blue Snow6';
	$c='2';
	$d='10';
	echo"<br />";
	echo"<br />";
	echo strcmp($a,$b);		//比较字节数所以$a>$b返回1
	echo"<br />";
	echo strnatcmp($c,$d);		//  strnatcmp比较数字大小，也比较字节数，$c<$d 返回负数
	echo"<br />";
	echo strnatcmp($d,$c);		//  $d>$c 返回正数 若$d=$c  则返回0 
	echo"<br />";
?>
///////////////以下为stracmp函数:指定位置比较，且区分大小写
<?php
	echo"<br />";
	$str="Blue Snow sue white tu";
	$st="blue Snow";
	echo"<br />";
	echo"<br />";
	echo strncmp($str,$st,2);		//因为$str首字母大写且只比较前两个字符，所以$str<$st返回-1
	echo"<br />";
	echo strncmp($str,$st,25);		//不出意外$str>$st返回正数 好吧，出意外了，返回负数
?>

</body>
</html>