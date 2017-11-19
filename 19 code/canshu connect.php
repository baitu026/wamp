<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PDO:通过参数连接数据库</title>
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
    $dsn = "mysql:host=localhost;dbname=database18";
    $username = 'root';
    $pdo = new PDO($dsn, $username);
    var_dump($pdo);
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>
</body>
</html>
