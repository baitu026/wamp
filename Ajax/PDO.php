<?php
try {
$dsn = "mysql:host=localhost;dbname=user";
$username = 'root';
$pdo = new PDO($dsn, $username);
    $user='awfgawe';
    $sql='insert haha(username)values("'.$user.'")';
    $res=$pdo->exec($sql);
    echo $res;
}catch(PDOexception $e){
echo $e->getMessage();
}
?>