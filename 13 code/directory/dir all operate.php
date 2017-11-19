<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>创建目录 删除目录 获得当前目录 改变当前目录 目录重命名 获得目录可用空间 获得目录全部空间 获得目录中下一个文件的文件名</title>
</head>
<body>
<?php
if(!is_dir('C:\wamp\www\14 code'))      //创建目录
    mkdir("14 code");
rmdir('14 code');       //删除目录
echo "创建和删除一起进行了 所以看不到"."<br />";

$a=getcwd();        //获得当前目录
echo $a;

chdir('C:\wamp\www\11 code'); //改变当前目录
$b=getcwd();
echo "<br />".$b."<br />";

rename('C:\wamp\www\13 code\directory\dir operate.php','C:\wamp\www\13 code\directory\look through dir.php');    //必须填绝对路径

$c=disk_free_space('C:\wamp\www\13 code\directory');        //获得当前空闲空间
$d=$c/1048576;
$e=$d/1024;
echo round($d)."MB"."=".round($e)."GB";         //round用于四舍五入取整

$all=disk_total_space('C:\wamp\www\13 code\directory');     //获得总空间
$a1=$all/1048576;
$a2=$a1/1024;
echo "<br /> 总空间:".round($a1)."MB=".round($a2)."GB".'<br />';

while(false !== ($path=readdir('C:\wamp\www\13 code\directory'))){      //readdir函数 返会目录中下一个文件的文件名
    echo $path;
}
?>
</body>
</html>