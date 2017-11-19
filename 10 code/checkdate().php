<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>checkdate(月，日，年)函数检验日期 的有效性,返回值为true或false 尤其注意顺序是:月 日 年</strong>
<br />
<body>
<?php
$year=2008;
$month=2;
$day1=29;
$day2=30;
var_dump(checkdate($month,$day1,$year));
echo"<br />";
var_dump(checkdate($month,$day2.$year));
?>
</body>
</html>