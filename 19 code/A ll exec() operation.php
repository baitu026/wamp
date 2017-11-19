<?php
try {
    $dsn = "mysql:host=localhost;dbname=lala";
    $username = 'root';
    $pdo = new PDO($dsn, $username);
    $sql=('delete from useres');        //一条错误sql
    $res=$pdo->exec($sql);
    var_dump($res);
    if($res==false){
        echo $pdo->errorCode();     //错误代码
        $ifo=$pdo->errorInfo();     //错误信息 返回的是一个数组
        ECHO "<HR /";
        print_r($ifo);
    }
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>

<!--
$sql=("insert user(id)values('3'),('15'),('16')");        //向’id‘ 中插入字段
$res=$pdo->exec($sql);
echo "受影响条数".$res;//会返回成功的条数，这里应该返回1
echo "<br />最后插入的ID号:".$pdo->lastInsertId();-->

<!-- $sql=('update user set id="1222" where id="122"');  //更新数据操作-->

<!--$sql=("delete from user where id='1222'");           //删除数据-->
