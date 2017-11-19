<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<script>
    function yes() {
        if(form1.user.value=="") {
            alert("注册失败");
        }
        window.location.reload();
    }
</script>
<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
    <table width="405" height="24" border="1" align="center">
        <tr bgcolor="#a9a9a9">
            <td width="103" height="25" align="right">姓名：</td>
            <td width="144" height="25" align="left"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
        </tr>

        <tr bgcolor="#a9a9a9">
            <td height="25" align="right">性别：</td>
            <td height="25" colspan="2" align="left"><input name="sex" type="radio" value="男">
                男
                <input type="radio" name="sex" value="女">
                女</td>
        </tr>
        <tr bgcolor="#a9a9a9">
            <td width="103" height="25" align="right">密码：</td>
            <td width="289" height="25" colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
        </tr>
        <tr bgcolor="#a9a9a9">
            <td height="25" align="right">学历：</td>
            <td height="25" colspan="2" align="left"><select name="select">
                    <option value="初中">初中</option>
                    <option value="高中">高中</option>
                    <option value="专科">专科</option>
                    <option value="本科" selected>本科</option>
                    <option value="研究生">研究生</option>
                    <option value="博士生">博士生</option>
                    <option value="硕士生">硕士生</option>
                </select></td>
        </tr>
        <tr bgcolor="#a9a9a9">
            <td height="25" align="right">爱好：</td>
            <td height="25" colspan="2" align="left"><input name="fond[]" type="checkbox" id="fond[]" value="电脑">
                电脑
                <input name="fond[]" type="checkbox" value="音乐">
                音乐
                <input name="fond[]" type="checkbox" value="旅游">
                旅游
                <input name="fond[]" type="checkbox" value="其他">
                其他</td>
        </tr>
        <tr bgcolor="#a9a9a9">
            <td height="25" align="right">个人写真： </td>
            <td height="25" colspan="2" align="left"><input name="photo" type="file" size="20" maxlength="1000" id="photo"></td>
        </tr>
        <tr bgcolor="#a9a9a9">
            <td height="25" align="right">个人简介： </td>
            <td height="25" colspan="2" align="left"><textarea name="intro" cols="28" rows="3" id="intro"></textarea></td>
        </tr>
        <tr align="center" bgcolor="#a9a9a9">
            <td height="25" colspan="3"><input type="submit" name="submit" value="提交" onclick="yes()">
                &nbsp;&nbsp;
                <input type="reset" name="submit2" value="重置"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST["submit"])!="")
{
    echo "您的个人简历内容是： ";
    echo "<br />";
    echo "姓名: ".$_POST["user"];
    echo "<br />";
    echo "性别: ".$_POST["sex"];
    echo "<br />";
    echo "密码: ".$_POST["pwd"];
    echo "<br />";
    echo "学历: ".$_POST["select"];
    echo "<br />";
    echo "爱好: ";
    for($i=0;$i<count($_POST["fond"]);$i++)
        echo $_POST["fond"]["$i"]."&nbsp;&nbsp;";
    echo "<br />";

    $path='./upfiles/'.$_FILES['photo']['tmp_name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],$path);
    echo "<br />";
    echo "个人写真: ".$path;
    echo "<br />";
    echo "个人简介: ".$_POST['intro'];
}
?>
</body>
</html>