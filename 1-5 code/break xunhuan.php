<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
</head>

<body>
<?php
while (true)
    :
    for (; ;)
        :
        for ($i = 0; $i <= 10; $i++) {
            echo $i . " ";                // 进行隔位输出要在双引号里加空格
            if ($i == 7) {
                echo "<p>变量\$i的值是" . $i;
                echo "跳出循环";
                echo "<p>";
                break 1;                // P74详解  多个break必须指明break的数量 中间用空格隔开
            }
        }
        for ($j = 0; $j <= 20; $j++) {
            echo $j . " ";
            if ($j == 15) {
                echo "<p>变量\$j的值是" . $j;
                echo "跳出循环";
                break 3;            //只能大于3不能小于3
            }

        }

    endfor;
endwhile;

?>
</body>
</html>