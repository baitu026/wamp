<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
/////////////////number_format函数格式化数字字符串 只能有1,2,4个参数 不能有三个参数，这是不规范的/////////////////////////////////////////////////////////////////////
number_format([number],[decimals],[decimalpoint,separator])
可以看到 1,2个参数是各自独立的，第三个参数是连在一起的，所以不能有单独的三个参数
<?php
echo "<br />";
echo "<br />";

$a = "123456789.918273645";       //同时也遵循四舍五入 舍去时如果>=则会往前进1，在实际应用是要注意
echo "源字符串为" . $a;

echo "<br />";
echo "<br />";

echo number_format($a);     //只有一个参数时，会舍去小数点后的值，且每三个数字用逗号隔开,如果为奇数，则第一个数就用逗号
echo "<br />";
echo "<br />";

echo number_format($a, 3);   //当有两个参数时 第二个参数表示保留小数点后几位，同时也遵守四舍五入原则
echo "<br />";
echo "<br />";

echo number_format($a,3,'*','!')   // 当有三个参数时 第三个参数表示替代小数点，第四个参数表示替代用来隔开的逗号
?>
</body>
</html