<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>baitu</title>
</head>

<body>
<?php
while (true):        //无限循环
    $tmp = rand(1, 10);            //定义随机发生的种子变量
    echo $tmp . "";
    if ($tmp == 10):            // 当随机发生的种子数为10
        echo "<p>变量等于10，终止循环";
        break;
    endif;
endwhile;

?>
</body>
</html>