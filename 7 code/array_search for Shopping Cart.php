<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>无标题文档</title>

    <style type="text/css">
        .Sue{
            background-color:#FF0000;
        }
        h3{
            color: #FF0000;
        }
        span{
            color: #FF0000;
        }
    </style>
    //////////////////////array_search函数用来指定在数组中搜索值，第一个参数为在数组中搜索的值，第二个参数为指定数组////////////////////
    <br /><br />
    //array_search函数对购物车的商品数量的修改和删除 <h3>注意<h3>:<span>在php中进行注释时不能出现定界符<\?\?>否则程序将错误</span>
            '\'为转义字符
<body>
<?php
echo"<br /><br />";

$name="智能机器人@数码相机@天翼3G手机@瑞士手表";
$price="15000@3000@3500@67000";
$count="1@1@1@1";
$arrayid=explode("@",$name);        //将字符串转换为数组，其中@为要转换的分隔符
$arraynum=explode("@",$price);
$arraycount=explode("@",$count);

if(isset($_POST['Submit'])==true)   //加上isset就不会报错，如果直接写@_POST则会报错,同是Submit要加上引号
{
    $id=$_POST[name];       //获取要更改的产品名称
    $num=$_POST[count];     //获取要更改的数量
    $key=array_search($id,$arrayid);    //array_serach函数在arrayid中搜索产品的名称  并保存在key中
    $arraycount[$key]=$num;             //将要修改的数量赋给当前数量
    $count=implode("@",$arraycount);        //重新以@为分隔符连接字符串
}
?>

<table width="580" border="1" cellspacing="1" cellpadding="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
    <tr>        <!--定义表头的内容-->
        <td width="150" align="center" bgcolor="#FFFFFF" class="Sue">商品名称</td>
        <td width="150" align="center" bgcolor="#FFFFFF" class="Sue">价 格</td>
        <td width="150" align="center" bgcolor="#FFFFFF" class="Sue">数量</td>
        <td width="150" align="center" bgcolor="#FFFFFF" class="Sue">金额</td>
    </tr>
    <?php       //注意:  如果要在HTML或CSS 中添加php代码要用PHP的定界符套起来
    for($i=0;$i<count($arrayid);$i++) {         //使用for循环循环读取数组中的数据
        ?>
        <form name="form1_<?php echo $i; ?>" method="post" action="index.php">  <!--创建交互的表单,name里的可有可无-->
            <tr>
                <!--输出产品的名称-->
                <td height="25" align="center" bgcolor="#00bfff" class="STYLE2"><?php echo $arrayid[$i]; ?></td>
                <!--输出产品的价格-->
                <td align="center" bgcolor="#00bfff" class="STYLE2"><?php echo $arraynum[$i]; ?></td>
                <!--输出产品的购买数量 并再次输出产品的名称-->
                <td align="center" bgcolor="#00bfff" class="STYLE2">
                    <input name="counts" type="text" value="<?php echo $arraycount[$i]; ?>" size="8">
                    <input name="name" type="hidden" value="<?PHP echo $arrayid[$i]; ?>">   <!--可有可无-->
                    <input type="submit" name="Submit" value="更改"></td>
                <!--再次输出产品的数量和价格-->
                <td align="center" class="STYLE2"><?php echo $arraycount[$i] * $arraynum[$i]; ?></td>
            </tr>
        </form>
        <?php
    }
    ?>
</table>
</body>
</html>
