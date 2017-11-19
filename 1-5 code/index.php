<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title无标题文档</title>
</head>
<body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'user');
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
}
$sql='insert haha(username)values("baitu")';
$res=$mysqli->query($sql);
?>
</body>
</html>
