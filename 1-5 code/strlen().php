<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$str="逆光而生 背光而行 Blue.Snow_";
	echo"<br />";
	echo $str;
	echo"<br />";
	echo strlen($str);		// strlen函数获得字符串长度<form action="index.php" method="post" enctype="index_ok.php"></form>
	echo"<br />";
?>
<?php
	echo"<br />";
	$a="Blue Snow";
	echo $a;
	echo"<br />";
	if(strlen($a)<20)		//同时strlen也可用来控制判断字符串是否符合要求
	{
		echo"字符串的长度小于20";
	}
	else
	{
		echo"输入正确";
	}
?>
</body>
</html>