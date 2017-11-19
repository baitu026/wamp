<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$a="New Sea beautiful winter is an unusual women";
	echo substr($a,0);		//从第0个字符开始截取 必须指定从哪里截取
	echo "<br />";
	echo substr($a,0,25);	//从第0个字符开始截取到25个字符
	echo "<br />";
	echo substr($a,-5,7);	//依然是从前向后截取，不是从倒数第5个向前截取
	echo "<br />";
	echo substr($a,0,-4);	//截取到-4个是指到第-4个字符时停下来，这要写是便于数字符
	echo "<br />";
?>
////////////////超长文本的截取和替换.../////////////////
<?php
	echo "<br />";
	$str="Backlight, Backlight and Backlight, Backlight and Backlight, Backlight and Backlight, Backlight and Backlight, Backlight and";
	echo $str;
	echo "<br />";
	echo "<br />";
	if(strlen($str)>30)
	{
		echo substr($str,0,24)."...";		//	截取到第24个字符 用连接字符连接省略号
	}
	else
	{
		echo $str;
	}

?>
</body>
</html>