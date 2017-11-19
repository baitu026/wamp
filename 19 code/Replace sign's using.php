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

<body>
<?php
try {
    $dsn = "mysql:host=localhost;dbname=user";
    $username = 'root';
    $pdo = new PDO($dsn, $username);
    $sql="INSERT haha(username)VALUES(:username)";      //  :username是占位符
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(':username',$username);        //bindParam绑定参数
    $username='aef';
    $stmt->execute();
}catch(PDOexception $e){
    echo $e->getMessage();
}

/*方法二:
$sql="INSERT haha(username,password)VALUES(?,?)";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(1,$username); $stmt->bindParam(2,$PSSWORD);

//1,2是索引位置，它代表了第一个? 第二个? 注意，索引是从1开始的

    $username='aefawf';$PSSWORD='13R';
    $stmt->execute();
*/
?>
</body>
</html>
