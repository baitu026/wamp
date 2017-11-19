<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
    </style>
<strong></strong   
></head>
<body>
 <form name="form1" action="" method="post">
	<table width="300">
    	<tr>
        	<td height="30" align="center" valign=middle>My sunshine</td>
        </tr>
        
        <tr>		<!--要让下拉列表框变成菜单列表框，只要加上multiple即可，此时按住Ctrl键可以进行多选-->
        	<td align="center" valign="middle"><select name="select[]" size=5 multiple>
<!--因为涉及到多选所以和checkbox复选框一样，使用数组保存,因为是菜单列表框,所以size设置的大小要与选项元素次数一致-->
            <option value="Blue">Blue</option>
            <option value="Snow">Snow</option>
            <option value="Backlight">Backlight</option>
            <option value="Backlight and">Backlight and</option>
            </select></td>
        </tr>
        
        <tr>
        	<td height="30" align="center" valign="middle">
            <input type="submit" name="submit" value="提交">
            </td>
        </tr>
        
    </table>
</form>            

<?php
	if(isset($_POST["select"])!="")		//响应表单事件,返回多列表选框
	{
		echo "您选择的是: ";
		for($i=0;$i<count($_POST["select"]);$i++)
			echo $_POST["select"][$i]."&nbsp;&nbsp;";
	}
?>       
</body>
</html>