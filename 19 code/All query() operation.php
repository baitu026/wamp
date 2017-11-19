<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
try {
    $dsn = "mysql:host=localhost;dbname=lala";
    $username = 'root';
    $pdo = new PDO($dsn, $username);

    $sql='select * from user where id=2';

    $res=$pdo->query($sql);
    foreach($res as $e){        //返回的数据不能直接打印，要遍历查看
        echo "<hr />";
       //var_dump($e);
        echo "用户ID:".$e['id']."<BR />";
        echo "用户密码:".$e['password'];
    }
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>