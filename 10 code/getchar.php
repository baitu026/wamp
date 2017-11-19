<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>getdate()函数获取指定的时间信息等</strong>
<br />
<body>
<?php
$a=getdate();
echo"当前的年月日:".$a[year]."-".$a[mon]."-".$a[mday]."<br />";
echo"当前的时钟秒:".$a[hours].":".$a[minutes].":".$a[seconds]."<br />";
echo"今天是今年第".$a[yday]."天";
echo"今天是".$a[month]."月"."第".$a[weekday]."天";
?>
</body>
</html>