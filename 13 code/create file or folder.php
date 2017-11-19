<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>创建文件 或 文件夹</title>
</head>
<body>
<?php
if (!file_exists('b.txt'))
    file_put_contents('b.txt', 'd');

if(!is_dir('C:\wamp\www\14 code'))
mkdir("14 code");
?>
</body>
</html>