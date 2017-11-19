<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>读取整个文件</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 20px;
        }
        body {
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        -->
    </style></head>
<body>
<table width="500" border="1">
    <tr><td width="250" height="100" align="left" valign="middle">使用readfile()函数读取文件的内容</td>
        <td width="250" height="100" align="center" valign="middle">
            <?php readfile('tm.txt');?>
        </td>
    </tr>
    <tr>
        <td heihgt="100" align="left" valign="middle">使用file()函数读取文件的内容</td>
        <td height="100" align="center" valign="middle">
            <?php $a=file('C:\wamp\www\11 code\safe.php');
            foreach($a as $b){
                echo $b."<br />";
            }
            ?>
        </td>
    </tr>
    <tr><td widht="250" height="25" align="left" valign="middle">使永file_get_contents()函数读取文件内容</td>
        <td height="25" align="center" valign="middle">
            <?php $as=file_get_contents('C:\wamp\www\11 code\default.php');
            echo $as;
            ?>
        </td>
    </tr>
</table>
</body>
</html>