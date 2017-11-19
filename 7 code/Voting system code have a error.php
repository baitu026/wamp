<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style type="text/css">
        .Sue={
            color：red;
        }
    </style>
</head>
<body>
<h1>-----------------------------定义添加投票表单---------------------------</h1>
<form name="form1" method="post" action="">     <!--创建一个表单-->
    <table width="400" border="1" cellspacing="1" cellpadding="1" bordercolor="#FF9900" bgcolor="#CCFF66">
        <tr align="center">     <!--使表单居中-->
            <td width="100" height="120">添加投票选项: </td>   <!--表单分成三个部分，这是左边的侧栏-->
            <td width="225" height="120">   <!--定义表单的中间部分-->
                <p>         <!--添加文本-->
                    <textarea name="content" cols="30" rows="10" id="content"></textarea>
                    <!--<textarea> 标签定义多行的文本输入控件。文本区中可容纳无限数量的文本 cols控制它的宽度，rows控制它的高-->
                    <br>
                    <span class="Sue">注意:每个选项间用*分隔</span></p></td>

            <td width="60" height="120"><input type="submit" name="submit" value="提交"></td> <!--在右边的侧栏显示-->
            <td width="60" height="120"><input type="reset" name="pwd" value="重置"></td> <!--也在右边新起一栏显示-->
        </tr>
    </table>
</form>
////////////////////////////if($_POST['Submit']!="")替换成if(isset($_POST['Submit'])!="") 这样就不会报错了//////////////////////////////////////////////////////////////
<tr>
    <td><table width="400" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
            <tr align="center">
                <td width="98" height="30">投票选项：</td>
                <td width="223" height="30">
                    <?php
                    if(isset($_POST['Submit'])!=""){     //if(isset($_POST[submit])) if(isset($_POST['Submit'])!="")
                        $content=$_POST[content];
                        $data=explode("*",$content);
                        while(list($name,$value)=each($data)){
                            echo '<input type="checkbox" name="checkbox" value="checkbox">';
                            echo $value."\n";
                        }
                    }
                    ?>
                </td>
                <td width="61" height="30">&nbsp;</td>
            </tr>
        </table></td>
</tr>
</table>

</body>
</html>