<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>microtime($1,$2) $1为微妙数 $2为时间戳</strong>
<br />
<body>
<?php
    function run(){
        list($a,$b)=explode(" ",microtime());       //explode函数将返回值分割成数组，list是将数组中的值赋给变量
        return ((float)$a+(float)$b);   //将$a $b相加，并保留小数
    }
    $start=run();       //计算开始时间

    $time1=strtotime(date('Y-m-d H:i:s'));  //定义两个时间，并化为时间戳格式
    $time2=strtotime("2017-5-1");

    $sub=ceil(($time2-$time1)/3600);    //60分*60秒 即返回小时 celi函数是一个向上取整的函数
    $sub2=ceil(($time2-$time1)/86400);   //60分*60秒*24时   即返回天数
    $sub3=ceil(($time2-$time1)/345600);  //60分*60秒*24时*4个周   即返回周数

    echo "离五一还有<font color=red>$sub</font>小时"."<br />";
    echo "离五一还有<font color=red>$sub2</font>天"."<br />";
    echo "离五一还有<font color='red'>$sub3</font>周"."<br />";

    $end=run();     //计算结束时间
?>
<p>
   运行的时间为<font color="blue"><?php echo ($end-$start);?></font>秒
</p>
</body>
</html>