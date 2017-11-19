<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php

/*  反射性XSS
$input=$_GET['user'];
echo $input;

URL:localhost:81/QUIZ.php?user=<script>alert("你好啊")</script>
*/
?>
<?php
/* window.name跨域传递数据
QUIZ:<SCRIPT>
window.name="<?php echo "你好啊";?>";
alert(document.domain+"    "+window.name);
window.location="untitled.php";
</SCRIPT>

untitled:<script>
alert(document.domain+"  "+window.name);
</script>
*/
?>
</body>
</html>