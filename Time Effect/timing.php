<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title>当前系统时间</title>
    <link rel="stylesheet" href="style.css"  />

    <script language="javascript" type="text/javascript">
        <!--
        window.onload = function(){
            showTime();
        }
        function checkTime(i)
        {
            if (i<10)
            {i="0" + i}
            return i
        }
        function showTime()
        {
            var now=new Date();
            var year=now.getFullYear();
            var month=now.getMonth()+1;
            var day=now.getDate();
            var h=now.getHours();
            var m=now.getMinutes();
            var s=now.getSeconds();
            m=checkTime(m)
            s=checkTime(s)

            var weekday=new Array(7);
            weekday[0]="星期日"
            weekday[1]="星期一"
            weekday[2]="星期二"
            weekday[3]="星期三"
            weekday[4]="星期四"
            weekday[5]="星期五"
            weekday[6]="星期六"

            document.getElementById("show").innerHTML=""+year+"年"+month+"月"+day+"日 "+weekday[now.getDay()]+h+":"+m+":"+s;
            t=setTimeout('showTime()',500)
        }
        //-->
    </script>
</head>
<body>
<div class="content1">
    <div id="show">显示时间的位置</div>
</div>
</body>
</html>
