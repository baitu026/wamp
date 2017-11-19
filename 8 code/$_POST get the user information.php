<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
//有关文本框，密码框，隐藏域，按钮，textarea文本域获取他们的值的方法都是一样的，都是通过name的赋值和$_POST来获取，就不详细一一写了////
<body>
<form name="form1" action="" method="post">
    用户名:<td><input type="text" name="user" size="20">       <!--用户的输入信息-->
        密 码:<td><input type="password" name="pwd" size="20">
        <input name="submit" type="submit" value="登录">&nbsp;
</form>
<?php
if(isset($_POST["submit"])=='登录')   //判断用户是否登录
{
    echo "您输入的用户名为:".$_POST[user];  //动用全局变量$_POST获取用户名的值，注意一定要与上方'name=?'中的命名一致
    //并且区分大小写，也不能有空格
    echo "密码为:".$_POST[pwd];    //$_POST获取用户的密码
}
echo "<br />在Dreamweaver里可以获取到,PHPstorm里获取不到";
?>
</body>
</html>
