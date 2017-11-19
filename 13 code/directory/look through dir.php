<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>打开目录,关闭目录  浏览目录scandir 返回所有目录和子目录中的文件</title>
</head>
<body>
<?php
$path='C:\wamp\www\13 code';
if(is_dir($path)){          //判断目录是否存在
    if($a=opendir($path)!=false){      //判断打开是否成功
        echo "目录打开成功"."<br />";
        $arr=scandir($path);
        foreach($arr as $value){
            echo $value."<br />";
        }
    }
}
else{
    echo "文件不存在";
}
closedir($a);
?>
</body>
</html>