<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$a="BLUE SNOW";
	$c="blue snow";		//实验证明 小写字母大于大写字母
	$b="AND";
	$d="and";
	echo $a;
	echo "<br />";
	echo $c;
	echo "<br />";
	echo $b;
	echo "<br />";
	echo $d;
	echo "<br />";
	echo "<br />";
	
	
	if($i=(strcmp($a,$c)>0))
	{
		echo $i;
		echo"<br />";
		echo "a大于c";
	}
	else if($u=(strcmp($a,$c)<0))		//strcmp区分大小写
	{
		echo $u;
		echo"<br />";
		echo "a小于c";		// $a>c则返回值>0  $a<c返回值<0  $a=$c 返回值为0
	}
	echo "<br />";
	echo "<br />";
	echo strcasecmp($b,$d);			//strcasecmp不区分大小写
?>
</body>
</html>