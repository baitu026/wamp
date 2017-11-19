<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>strtotime(日 月 年)将时间转为UNIX时间戳(一长串数字),可由date()函数解析</strong>
<br />
<strong>PHP中的时间不可直接进行比较，所以要化为时间戳格式再进行比较 相减后的时间最小是1970不会是负的</strong>
<br />
<body>
<?php
echo strtotime('now')."\n";         //获得当前时间戳
echo"对时间戳进行解析:".date('Y-m-d H:i:s',strtotime('now'))."<br />";
echo strtotime('23 March 2017 8 hours 28 seconds 59 minutes')."\n";     //设置年月日 时钟秒
echo"对时间戳解析:".date('Y-m-d H:i:s',strtotime('23 March 2017 8 hours 28 seconds 59 minutes'))."<br />";
echo strtotime('+7 week +20 hours');        //将时间向后推移，也可向后减
echo"对时间戳解析:".date('Y-m-d H:i:s',strtotime('+7 week +20 hours'));
?>
<?php
echo "<br /><br />";
$a=date('Y-m-d H:i:s');
echo "a的值".$a."<br />";
$b='2017-4-23 22:22:22';
echo "b的值".$b."<br />";
$c=strtotime($a);
$d=strtotime($b);
$result=$d-$c;
echo "相减的值为:".date('Y-m-d H:i:s',$result);      //相减后的值加上1970
?>
</body>
</html>