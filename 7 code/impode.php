<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style type="text/css">
    </style>
</head>
//////////////////////////implode()用于将数组以新的的分隔符分开/////////////////////////////////////////////////////////
<body>
<?php
echo "<br /><br />";
$str=array('Blue','Snow','Backlight','Backlight','and','Sue');  //注意:数组里的元素要用引号括起来，不然会报错
echo implode(" ",$str); //implode实则就是把原来分隔符'逗号'改成其他的分隔符，如空格等
?>
</body>
</html>