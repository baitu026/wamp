<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>无标题文档</title>
</head>

<body>
<?php
$arr = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
for ($i = 0; $i < 10; $i++)
    :
    echo "<br>";
    if ($i % 2 == 0) {
        continue;
    }
    for (; ;) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($j == $i) {
                continue 3;
            } else {
                echo "\$arr[" . $j . "]=" . $arr[$j] . "";
            }
        }
    }
endfor;
?>
</body>
</html>