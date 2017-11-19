<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html"
      xmlns:bordercolor="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title无标题文档</title>
    <style type="text/css">

    </style>
</head>

<body>
<h1>------------------------------------定义用户登录表单------------------------------------------</h1>
<form name="form1" method="post">
    <table width="325" border="1" bordercolor="#66CC33" bgcolor="FFFFFF">
        <!--设置宽度 边框以及线框色和背景色-->
        <tr>
            <td width="120" height="25" align="right" bgcolor="#CCFF33">用户名: </td>
            <td width="200" height="25" bgcolor="#CCFF33"><input type="text" name="user" size="25"></td>
        </tr>

        <tr>
            <td height="25" align="right" bgcolor="#CCFF33">密&nbsp;&nbsp;码: </td>   <!--加两个空格使'密码'等宽分布-->
            <td height="25" bgcolor="#CCFF33"><input name="pwd" type="password" size="25">
        </tr>

        <tr align="center" bgcolor="#CCFF33">
            <td height="24" bgcolor="#CCFF33" colspan="2"><input type="submit" name="submit" value="登录"></td>
            <!-- colspan是列合并 rowspan是行合并 后面是是合并的数量-->
        </tr>
    </table>
</form>

<?php
// $_POST是全局变量
while(list($name,$value)=each($_POST))  //name 和 value 是随便起的变量名，没有其他意义
    //list()函数是把数组中的值赋给一些变量 但他只能用于数组索引，且索引值从0开始，也就是没有改动过下标的数组元素
    // each()函数用于返回当前指针位置的数组值，并同时将指针推到下一个位置，如果指针已经在末尾，则返回false
{
    if($name!="submit")     //如果不等于'登录'
    {
        echo "$name=$value<br />";  // 则name=value
    }
}

?>
</body>
</html>
