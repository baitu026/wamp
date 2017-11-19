<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong>如果为设置cookie的失效时间 关闭浏览器将自动删除，如果设置了即使关闭计算机 只要没到期，浏览器将一直记住他
    要删除COOkie可以吧失效时间设为0 如:setcookie("Blue",time()+0); 这样就删除了名为Blue的Cookie
</strong>
<br />
<script language="JavaScript">
    function yes(){
        var count;
        count=prompt("如果要创建Cookie 请输入YES 否则输入NO");
        if(count=="YES"){
            alert("已成功创建");
        }
        else{
            document.write("\n您取消了选择");
        }
    }
</script>
<body>
<?php
if(!isset($_COOKIE["visit"])){      //isset函数检验cookie文件是否存在
    setcookie("visit",date("y-m-d H:i:s"));     //创建一个cookie名为visit 并加上日期函数
    echo"Cookie已失效 是否创建一个cookie?";
}
elseif(isset($_COOKIE["visit"])){       //如果该cookie存在
    setcookie("visit",date("y-m-d H:i:s"),time()+60); //使用time()函数获得时间,+3600为cookie有效时间一分钟 再次运行可能就失效了
    echo "您上次访问的时间:20".$_COOKIE["visit"];
    echo"<br />";
    echo "本次访问时间:20".date("y-m-d H:i:s");
}
?>
<br />
<input type="button" name="" value="创建" onclick="yes()">
</body>
</html>