<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>研究生考试时间</title>
</head>
<script language="javascript" type="text/javascript">
    window.onload = function(){
        var timedate= new Date("7,24,2017");
        var now = new Date();
        var date = timedate.getTime() - now.getTime();    //得出的为毫秒
        var time = Math.ceil(date/(1000 * 60 * 60 * 24));
        //1000 * 60 * 60 * 24一天的秒数
        if(time > 0 ){
            document.getElementById('timeShow').innerHTML = time;
        }
    }
</script>
<body>
<div class="content2">
    <div class="txtshow">距离2017年研究生考试时间还有<span  id="timeShow"></span>天</div>
</div>
</body>
</html>
