<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PDO:通过exec执行sql语句</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        -->
    </style></head>
<strong>PDO:prepare准备一条预处理语句 execute实现一条预处理语句</strong>
<hr />
<body>
<?php
try {
    $dsn = "mysql:host=localhost;dbname=lala";
    $username = 'root';
    $pdo = new PDO($dsn, $username);
    $sql='select * from user';
    $res=$pdo->prepare($sql);       //准备
    $row=$res->execute();   //执行 现在直接打印只能得到一个 true 预处理可以防止SQL注入
    /*方法1:
     $final=$res->fetchAll();        //对象必须是准备的语句，fetchAll获取全部记录
     var_dump($final);       //打印*/

    //方法2：
    while($finally=$res->fetch(PDO::FETCH_ASSOC)){  //以关联形式显示 详情见书 P347
        print_r($finally);
        echo "<hr />";
    }//方法2

}catch(PDOexception $e){
    echo $e->getMessage();
}
?>
</body>
</html>