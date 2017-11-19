<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>读取整个文件</title>
</head>
<style type="text/css">
</style>
<strong>fgetc函数每次读取一个字符，失败返回false
    fread函数指定读取的个数 filesize函数返回指定文件的大小
</strong>
<body>
<?php
echo "<br /><br />";
$a=fopen('tm.txt','r');
while(false!==($b=fgetc($a))){
    echo $b;
}
fclose($a);
?>

<?php
    echo "<br />";
    $a=fopen('tm.txt','r');
    echo fread($a,32);  //从文件a中读取32个字符
    echo "<br /><br />";
    echo fread($a,filesize('tm.txt'));
    fclose($a);
?>
</body>
</html>