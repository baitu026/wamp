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
@$U=$_POST['username'];
@$P=$_POST['qd'];
try {
	 $dsn = "mysql:host=localhost;dbname=user";
    $username = 'root';
    $pdo = new PDO($dsn, $username);
	
	$U=$pdo->quote($U); //    !!!quote返回单引号的字符串并自动过滤特殊字符，可以防止SQL注入 这样下面就不用再写单引号了
	echo $U;
	
    $sql="select * from haha where username={$U}";	//必须用单引号(有quote除外)且要套花括号
	$final=$pdo->query($sql);
	echo $final->rowCount();		//返回结果集中受影响的条数

	
}catch(PDOexception $e){
    echo $e->getMessage();
}
?>
</body>
</html>