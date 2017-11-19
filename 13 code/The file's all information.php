<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>文件的复制，重命名，删除，访问时间,文件的信息，路径</title>
</head>
<body>
<table width="500" border="1">
    <tr><td width="250" height="50" align="left" valign="middle">复制文件到另一个文件 copy(1,2)</td>
        <td width="240" height="100" align="center" valign="middle">
            <?php
            copy('tm1.txt','Second');
            readfile('Second');
            ?>
        </td></tr>
    <tr>
        <td height="50" align="left" valign="middle">将文件重命名 rename(1,2)</td>
        <td height="50" valign="middle" align="center">
            <?php
            echo"在这里看不到";
            rename('tm.txt','tmtm.txt');
            ?>
        </td>
    </tr>
    <tr>
        <td width="250" height="50" align="left" valign="middle">删除文件 unlink()</td>
        <td height="50" valign="middle" align="center">
            <?php
            echo"你还是在这里看不到";
            if(!file_exists('tm.txt'))      //检验是否存在文件tm
                file_put_contents('tm.txt','b');
            unlink('tm.txt');
            ?>
        </td>
    </tr>
    <tr>
        <td width="250" height="70" valign="middle" align="left">返回文件最后一次被访问和被修改的时间 fileatime  filemtime</td>
        <td height="50" valign="middle" align="center">
            <?php
            echo "最后一次被修改的时间:".date('Y-m-d H:i:s',fileatime('tm1'))."<br />";   //返回的是UNIX时间戳
            echo "最后一次访问的时间".date("Y-m-d H:i:s",filemtime('Second'))."<br />";   //所以要用日期函数解析一下
            ?>
        </td>
    </tr>

    <tr>
        <td width="250" height="50" valign="middle" align="left">返回文件的大小</td>
        <td height="50" valign="middle" align="center">
            <?php
            $a=filesize('Second');
            echo $a;
            ?>
        </td>
    </tr>

    <tr>
        <td width="250" height="100" valign="middle" align="left">获得文件的路径信息和绝对路径 pathinfo</td>
        <td>
            <?php
            $arr=pathinfo('Second');
            echo"相关信息<br />";
            foreach($arr as $method=>$value){
                echo $method.":".$value."<br />";
            }
            echo "绝对路径<br />".realpath('Second');
            ?>
        </td>
    </tr>

    <tr>
        <td width="250" height="100" valign="middle" align="center">返回所有信息 stat()</td>
        <td height="100" valign="middle" align="center">
            <?php
            $a=stat('Second');
            foreach($a as $match => $vlue){
                echo $match.":".$vlue."<br />";     //信息太多，搞不过来
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>