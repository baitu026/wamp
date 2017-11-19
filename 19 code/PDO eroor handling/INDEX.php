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
    //自动处理
    $pdo->setAttribute(PDO::ATTR_ERRMODE,1);        //设置完后会自动报出错误
    $sql='select * from susj';      //一条错误的SQL
    $final=$pdo->query($sql);

    /*echo $pdo->errorCode();       //主动处理
    print_r($pdo->errorInfo());*/
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>
</body>
</html>