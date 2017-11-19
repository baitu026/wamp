<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
<strong>size属性的作用:当size为1时,在用户界面只显示一个选择框,当选择元素大于size的值是会自动生成滚动条</strong   
></head>
<body>
<form name="form1" method="post" action="">
	<table width="280">
    	<tr>
        	<td width="80" height="25" align="center"><span>My sunshine:</span></td>
            <td width="200">
            	<select name="select" size="1">	<!--设置下拉列表框,和size大小-->
                	<option value="Blue" selected>Blue</option>  <!--设置selected时，会自动选择这项-->
                    <option vlaue="Snow">Snow</option>
                    <option vlaue="Backlight">Backlight</option>
                    <option vlaue="Backlight and">Backlight and</option>
                </select>&nbsp;&nbsp;&nbsp;
              <input type="submit" name="submit" value="提交"></td>
        </tr>            
    </table>    
</form>    
<?php
	if($_POST['submit']=="提交")		//判断是否提交
	{
		echo "您选择的意见主题为:".$_POST[select];	//使用全局表量$_POST输出选择的值
	}
?>
        
</body>
</html>