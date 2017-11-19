<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>使用iframe改写index.php中的大量div</title>

</head>

<body>
<p id="txt">你好啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊你好啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>
<div id="weibo" style="display:none;position:absolute"><img src="baiye.jpg" width="30px" height="30px"></div>
<script>
    window.onload=function(){
        function selectText(){
            return window.getSelection().toString();        //将选中文本装化成字符串
        }
        var text=document.getElementById("txt");
        var weibo=document.getElementById("weibo");
        text.onmouseup=function(ev){
            var ev=ev||window.event;
            var top=ev.clientY;
            var left=ev.clientX;
            if(selectText().length>1){
                weibo.style.display="block";
                weibo.style.left=left+'px';
                weibo.style.top=top+'px';
            }else{
                weibo.style.display='none';
            }
        }
        text.onclick=function(ev){
            var ev=ev||window.event;
            ev.cancelBubble=true;       // 取消事件处理。
        }
        document.onclick=function(){
            weibo.style.display='none';     //点击页面任意地方时消失
        }
        weibo.onclick=function(){
            window.location.href='http://service.weibo.com/share/share.php';
        }
    }
</script>
</body>
</html>