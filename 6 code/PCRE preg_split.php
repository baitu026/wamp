<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
</head>
<br />
///////////////////preg_split与POSIX的split使用方法相同，但要注意PCRE的正则表达式要放在/ /定界符中，否则会报错//////////////////////////
<body>
<?php
$a="blue Snow bcklight backlight and";
$b='/b/';       //注意 因为是PCRE风格的正则，要放在定界符/ /中
$str_arr=preg_split($b,$a,2); //  参数和表达方式与split相同，不再赘述
var_dump($str_arr);
?>
</body>
</html>
