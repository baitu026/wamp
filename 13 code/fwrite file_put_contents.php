<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>读取整个文件</title>
</head>
<body>
<?php
$path="tm.txt";
$str="浅滩卧龙终得水 倒海翻江定乾坤";
$open=fopen($path,'wb')or die('文件不存在');
echo "<br /> 使用fwrite函数向文件中写入数据:";
fwrite($open,$str);
readfile($path);
fclose($open);

echo"<br /> 使用file_put_contents()函数写入数据:";
file_put_contents($path,$str);
readfile($path);
?>
</body>
</html>