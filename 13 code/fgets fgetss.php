<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>读取整个文件</title>
</head>
<body>
<table border="1">
    <tr><td width="200" height="30" align="left" valign="middle">fgets函数一次读取一行</td>
        <td>
    <?php
        $a=fopen('fun.php','r');
        while(!feof($a)){
            echo fgets($a);
        }
        fclose($a);
    ?>
        </td>
    </tr>
    <tr><td width="200" height="30" align="left" valign="middle">fgetss函数自动过滤掉HTML PHP标签</td>
        <td align="left" valign="middle">
            <?php
                $a=fopen('fun.php','r');
                while(!feof($a)){
                    echo fgetss($a);
                }
                fclose($a);
            ?>
        </td>
    </tr>
</table>
</body>
</html>