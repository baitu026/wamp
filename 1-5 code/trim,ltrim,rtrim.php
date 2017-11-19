<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$str=  "/r/n(:Blue Snow:)"  ;	// 注意/r不是回车符 反斜杠\r才是回车符，这点与C语言不同
	echo trim($str);		//trim去除两边的空格和特殊字符 但不包括/r/n
	echo "<br />";
	echo trim($str,"/r/n(::)");		//双引号里面为可选参数 必须加双引号
	echo"<br />";
?>
<?php
	echo"<br />";
	$str="@_@Blue Snow @_@";	
	echo ltrim($str);			//ltrim去除左边的空格和特殊字符
	echo "<br />";
	echo ltrim($str,"(@_@)");		//ltrim的参数同样要加双引号进行区分
	echo"<br />";
?>
<?php
	echo"<br />";
	$str="@_@Blue Snow @_@";	
	echo rtrim($str);			//rtrim去除右边的空格和特殊字符
	echo "<br />";
	echo rtrim($str,"(@_@)");		//rtrim的参数同样要加双引号进行区分

?>
</body>
</html>