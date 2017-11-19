<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
</head>
<strong></strong>
<br />
<script language="JavaScript">
    var count;
    function check(form) {
        if (form.user.value == "") {
            alert("请输入用户名");
            count=prompt("是否注册? 1 or 0");
            if(count==1){
                window.open("register.php","_blank");
            }
            form.user.focus();
            return false;
        }
        if(form.pwd.value==""){
            alert("请输入密码");
            count=prompt("是否注册? 1 or 0");
            if(count==1){
                window.open("register.php","_blank");
            }
            form.pwd.focus();
            return false;
        }
        form.submit();
    }
</script>
<body>
 <div class="head">
            <div class="logo fl"><a href="#"></a></div>
           <h3 class="head_text fr" align="center" style="border:groove #F00">电子商务网站</h3>
    </div>
<form method="post" action="default.php" name="form1">
    <table width="524" height="394" border="0" align="center">
        <tr>
                <table width="524" border="0">
                    <tr>
                        <td height="24" align="right">用户名:</td>
                        <td height height="24" align="left"><input name="user" type="text" size="20"></td>
                    </tr>
                    <tr>
                        <td height="24" align="right">密&nbsp;&nbsp;码:</td>
                        <td height="24" align="left"><input name="pwd" type="password" size="20"></td>
                    </tr>
                    <tr align="center">
                        <td height="24" colspan="2"><input name="Submit" type="submit" value="提交" onClick="return check(form)">
                         <input name="Reset" type="reset" value="重填">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
</body>
</html>