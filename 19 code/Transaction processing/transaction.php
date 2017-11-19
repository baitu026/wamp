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
@$U=$_POST['un'];
@$P=$_POST['psw'];
$dsn='mysql:host=localhost;dbname=user';
try{
    $pdo=new PDO($dsn,'root');
	$pdo->beginTransaction();
    $sql="insert haha(username,password)values('".$U."','".$P."')";
    $result=$pdo->prepare($sql);
	if($result->execute()){
		echo "数据添加成功";
	}
	else{
		echo "数据添加失败";
		}
		
	$pdo->commit();
}catch(PDOexception $e){
    echo $e->getMessage();
	$pdo->rollBack();
}
?>
</body>
</html>


