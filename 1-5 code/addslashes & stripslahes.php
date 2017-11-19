<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$str="I'm' 白荼";		//单引号在双引号中不起作用，所以不用转衣服\进行转义
	echo $str;
	echo"<br />";
	echo 'I\'m 白荼';  		//如果是双引号则不会起作用，但如果是单引号则会起作用
	echo"<br />";
?>
<?php
    echo"<br />";
    
	$str="I'm 白荼";
    echo $str."<br>";
    echo"<br>";
    
	$a=addslashes($str);		//进行自动转义
    echo $a."<br>";
    
	echo"<br />";
    $b=stripslashes($a);		//还原转义
    echo $b."<br>";    
    ?>
</body>
</html>