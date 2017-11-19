<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>mktime()将一个时间转换成UNIX时间戳 它是一串长整数</strong>
<br />
<strong>time()获取当地时间戳并自动将时间戳格式化</strong>
<body>
<?php
    date_default_timezone_set(Asia/Shanghai);       // 也可设置为timezone则PHP会自动识别时区
    echo "mktime()返回的时间戳".mktime()."<br />";
    echo "格式化返回的时间戳:".date("Y-m-d",mktime());
    echo "时钟秒:".date("H:i:s",mktime());
?>
<?php
    echo "<br /><br />";
    $a=time()+(7*24*60*60);     //7天 24小时 60分 60秒
    echo "当前时间:".date('Y-m-d H:i:s')."<br />";  //输出当前时间
    echo "推迟一个周后的时间为:".date('Y-m-d H:i:s',$a);      //推迟一个周的时间
?>
</body>
</html>