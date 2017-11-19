<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$a="I'm Sue Blue Snow";
	echo $a."<br />";
	$b=addcslashes($a,"I'm");	//比addslashes多了一个c用于指定范围内句子的转义
	echo $b."<br />";
	
	$c=stripcslashes($b);  //stripcslashes只能用于被addcslashes指定转义过的句子而不能用于addslashes转义过的
	echo $c;
?>
</body>
</html>