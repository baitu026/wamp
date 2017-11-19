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
<strong></strong>
<br />
<body>
<?php
    $dsn='mysql:host=localhost;dbname=user';
    try{
        $pdo=new PDO($dsn,'root');
        $sql='select * from haha';
        $f1=$pdo->prepare($sql);
        $f1->execute();

        echo $f1->fetchColumn(0);
        echo $f1->fetchColumn(0);
        echo $f1->fetchColumn(0);
        echo $f1->fetchColumn(0);
    }catch(PDOexception $e){
        echo $e->getMessage();
    }
?>
</body>
</html>






















