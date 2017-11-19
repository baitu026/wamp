<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<?php
session_start();    //初始化session
$_SESSION['user']=$_POST['user'];   //通过全局变量POST将用户名保存在会话user里 密码同理
$_SESSION['pwd']=$_POST['pwd'];
?>
<TABLE align="center">
    <TR align="top"> <!--规定单元格中内容的垂直排列方式对内容进行居中对齐。-->
        <TD style="WIDTH:140px;COLOR=red">当前用户:&nbsp;
            <?php if($_SESSION['user']=="soft" && $_SESSION['pwd']=="111"){echo "管理员";} else{echo"普通用户";};?>
        </TD>
        <TD width="70"><a href="http://weibo.com/">博客首页</a></TD>
        <TD width="70">|<a href="https://www.baidu.com/">我的相册</a></TD>&nbsp;&nbsp;
        <TD width="70">|<a href="https://www.zhihu.com/">音乐在线</a></TD>
        <TD width="70">|<a href="http://qzone.qq.com/">修改密码</a></TD>
        <TD width="70">|<a href="safe.php">注销用户</a></TD>
        <?php
        if($_SESSION['user']=='soft' && $_SESSION['pwd']=='111'){
            ?>
            <TD width="70">|&nbsp;<a href="default.php">用户管理</a></TD>
        <?php
            }
        ?>
    </TR>
</TABLE>
</html>